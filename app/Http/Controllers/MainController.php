<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use App\models\Customer;
use App\models\Project;
use App\models\StatusUpdates;
use App\utils\Utils;

class MainController extends Controller
{
  /* GET RESPONSES */

  public function getLogin(Request $r)
  {
    if($r->session()->exists('customer'))
    {
      $projectID = $r->session()->get('pid');

      return redirect("dashboard?pid=$projectID");
    }
    else
    {
      Utils::setLang($r);

      return view('login')->with('lang', $r->session()->get('lang'));
    }
  }

  public function getProjectFinish(Request $r)
  {
    Utils::setLang($r);

    return view('project-finish')->with('lang', $r->session()->get('lang'));
  }

  public function getProjects(Request $r)
  {
    if(!$r->session()->exists('customer'))
    {
      return redirect('/');
    }

    $resProj = DB::select('select * from projects where customer_id = ? and is_ongoing = 1', [$r->session()->get('customer')->customerID]);

    if(count($resProj) == 0)
    {
      $r->session()->forget('customer');
      $r->session()->forget('pid');
      $r->session()->forget('numberOfProject');

      return redirect('project-finish');
    }

    if(count($resProj) == 1)
    {
      $r->session()->put('numberOfProject', 'single');

      foreach ($resProj as $row)
      {
        $r->session()->put('pid', $row->project_id);
      }

      return redirect("dashboard?pid=$row->project_id");
    }

    $r->session()->put('numberOfProject', 'multiple');

    Utils::setLang($r);

    $projects = array();

    foreach ($resProj as $row)
    {
      $project = new Project();
      $project->projectID = $row->project_id;
      $project->projectName = $row->project_name;

      array_push($projects, $project);
    }

    return view('projects')->with('projects', $projects)->with('lang', $r->session()->get('lang'));
  }

  public function getDashboard(Request $r)
  {
    if(!$r->session()->exists('customer'))
    {
      return redirect('/');
    }

    $projectID = Input::get("pid");

    if(empty($projectID))
    {
      abort(404);
    }

    $resProj = DB::select('select * from projects where project_id = ?', [$projectID]);

    if(count($resProj) == 0)
    {
      abort(404);
    }

    foreach ($resProj as $row)
    {
      if($row->is_ongoing == 0)
      {
        return redirect('projects');
      }
    }

    Utils::setLang($r);

    $project = new Project();

    foreach ($resProj as $row)
    {
      $project->projectID = $row->project_id;
      $project->customerID = $row->customer_id;
      $project->projectName = $row->project_name;
      $project->percentage = $row->percentage;
      $project->isOngoing = $row->is_ongoing;
      $project->createdAt = $row->created_at;

      if($row->payment_status == 0)
      {
        if($r->session()->get('lang') == 'tr')
          $project->paymentStatus = 'Hiçbir ödeme yapılmadı. Lütfen en kısa zamanda ödeme yapın.';
        else
          $project->paymentStatus = 'There is not any payment that was made. Please make your payments as soon as possible.';
      }
      else if($row->payment_status == 1)
      {
        if($r->session()->get('lang') == 'tr')
          $project->paymentStatus = 'Ön ödeme yapıldı. Kalan ödemeler bekleniyor.';
        else
          $project->paymentStatus = 'Upfront payment was made. Remaining payment pending.';
      }
      else
      {
        if($r->session()->get('lang') == 'tr')
          $project->paymentStatus = 'Bütün ödemeler yapıldı. Teşekkür ederiz.';
        else
          $project->paymentStatus = 'All payments were made. Thank you.';
      }
    }

    $resStatUp = DB::select('select * from status_updates where project_id = ?', [$projectID]);

    foreach ($resStatUp as $row)
    {
      $statusUpdate = new StatusUpdates();
      $statusUpdate->id = $row->id;
      $statusUpdate->projectID = $row->project_id;
      $statusUpdate->title = $row->title;
      $statusUpdate->description = $row->description;
      $statusUpdate->createdAt = $row->created_at;

      array_push($project->statusUpdates, $statusUpdate);
    }

    $r->session()->put('pid', $project->projectID);

    return view('dashboard')->with('customer', $r->session()->get('customer'))->with('project', $project)->with('numberOfProject', $r->session()->get('numberOfProject'))->with('lang', $r->session()->get('lang'));
  }



  /* POST RESPONSES */

  public function postLogin(Request $r)
  {
    if(empty($r->username) || empty($r->passwrd))
    {
      if($r->session()->get('lang') == 'tr')
      {
        return response(
          [
            'status' => 'fail',
            'redirectURL' => 'NULL',
            'message' => 'Lütfen bütün alanları doldurun!'
          ]
        );
      }
      else
      {
        return response(
          [
            'status' => 'fail',
            'redirectURL' => 'NULL',
            'message' => 'Please fill all fields!'
          ]
        );
      }
    }

    $res = DB::select('select * from customers where username = ? and passwrd = ?', [$r->username, $r->passwrd]);

    if(count($res) == 0)
    {
      if($r->session()->get('lang') == 'tr')
      {
        return response(
          [
            'status' => 'fail',
            'redirectURL' => 'NULL',
            'message' => 'Kullanıcı adınız veya şifreniz yanlış!'
          ]
        );
      }
      else
      {
        return response(
          [
            'status' => 'fail',
            'redirectURL' => 'NULL',
            'message' => 'Your username or password is wrong!'
          ]
        );
      }
    }

    if(count($res) > 1)
    {
      if($r->session()->get('lang') == 'tr')
      {
        return response(
          [
            'status' => 'fail',
            'redirectURL' => 'NULL',
            'message' => 'Kullanıcı birden fazla hesaba sahip!'
          ]
        );
      }
      else
      {
        return response(
          [
            'status' => 'fail',
            'redirectURL' => 'NULL',
            'message' => 'User has multiple account!'
          ]
        );
      }
    }

    $customer = new Customer();

    foreach ($res as $row)
    {
      if($row->is_active == 0)
      {
        if($r->session()->get('lang') == 'tr')
        {
          return response(
            [
              'status' => 'fail',
              'redirectURL' => 'NULL',
              'message' => 'Kullanıcı hesabı aktif değil!'
            ]
          );
        }
        else
        {
          return response(
            [
              'status' => 'fail',
              'redirectURL' => 'NULL',
              'message' => 'User account is not active!'
            ]
          );
        }
      }

      $customer->customerID = $row->customer_id;
      $customer->company = $row->company;
      $customer->name = $row->name;
      $customer->surname = $row->surname;
      $customer->website = $row->website;
      $customer->email = $row->email;
      $customer->phone = $row->phone;
      $customer->address = $row->address;
      $customer->username = $row->username;
      $customer->passwrd = $row->passwrd;
      $customer->loggedIn = $row->logged_in;
      $customer->isActive = $row->is_active;
      $customer->createdAt = $row->created_at;
    }

    $resProj = DB::select('select * from projects where customer_id = ? and is_ongoing = 1', [$customer->customerID]);

    if(count($resProj) == 0)
    {
      return response(
        [
          'status' => 'success',
          'redirectURL' => '/project-finish',
          'message' => 'NULL'
        ]
      );
    }

    $customer->loggedIn++;

    $r->session()->put('customer', $customer);

    DB::update('update customers set logged_in = ? where customer_id = ?', [$customer->loggedIn, $customer->customerID]);

    if(count($resProj) == 1)
    {
      $r->session()->put('numberOfProject', 'single');

      $projectID = '';

      foreach ($resProj as $row)
      {
        $projectID = $row->project_id;
      }

      return response(
        [
          'status' => 'success',
          'redirectURL' => "/dashboard?pid=$projectID",
          'message' => 'NULL'
        ]
      );
    }

    if(count($resProj) > 1)
    {
      $r->session()->put('numberOfProject', 'multiple');

      return response(
        [
          'status' => 'success',
          'redirectURL' => '/projects',
          'message' => 'NULL'
        ]
      );
    }
  }

  public function postLogout(Request $r)
  {
    $r->session()->forget('customer');
    $r->session()->forget('pid');
    $r->session()->forget('numberOfProject');

    return response(
      [
        'status' => 'success',
        'redirectURL' => '/',
        'message' => 'NULL'
      ]
    );
  }

  public function changeLanguage(Request $r)
  {
    if($r->toLang == 'Türkçe')
    {
      $r->session()->put('lang', 'tr');
      app()->setLocale('tr');
    }
    else
    {
      $r->session()->put('lang', 'en');
      app()->setLocale('en');
    }

    return response(
      [
        'status' => 'success',
        'redirectURL' => 'NULL',
        'message' => 'NULL'
      ]
    );
  }
}

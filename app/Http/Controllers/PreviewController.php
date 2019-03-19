<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\utils\Utils;

class PreviewController extends Controller
{
  /* GET RESPONSES */

  public function getPreview(Request $r)
  {
    if(!$r->session()->exists('customer'))
    {
      return redirect('/');
    }

    Utils::setLang($r);

    $projectID = Input::get("pid");
    $page = Input::get("page");

    try
    {
      return view("preview.$projectID.$page")->with('projectID', $projectID);
    }
    catch(\Exception $e)
    {
      abort(404);
    }
  }
}

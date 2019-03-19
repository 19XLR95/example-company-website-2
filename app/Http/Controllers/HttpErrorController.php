<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\utils\Utils;

class HttpErrorController extends Controller
{
  public function notFound(Request $r)
  {
    Utils::setLang($r);

    return view('errors.404')->with('lang', $r->session()->get('lang'));
  }

  public function internalError(Request $r)
  {
    Utils::setLang($r);

    return view('errors.500')->with('lang', $r->session()->get('lang'));
  }
}

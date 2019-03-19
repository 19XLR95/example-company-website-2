<?php

namespace App\utils;

use Illuminate\Http\Request;

class Utils
{
  public static function setLang(Request $r)
  {
    if($r->session()->exists('lang'))
      app()->setLocale($r->session()->get('lang'));
    else
    {
      $reqLangs = str_replace(',', ';', $r->server('HTTP_ACCEPT_LANGUAGE'));
      $reqLangs = explode(';', $reqLangs);

      $trFound = false;

      foreach ($reqLangs as $lang)
      {
        if($lang == 'tr' || $lang == 'tr-TR')
        {
          $trFound = true;

          break;
        }
      }

      if($trFound)
      {
        $r->session()->put('lang', 'tr');
        app()->setLocale('tr');
      }
      else
      {
        $r->session()->put('lang', 'en');
        app()->setLocale('en');
      }
    }
  }
}

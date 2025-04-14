<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public static function getSessionData(Request $request, $rotulo)
    {
       
        if (session()->exists($rotulo) && $request->session()->has($rotulo)) {
            return $request->session()->get($rotulo);
        } else {
            return false;
        }
    }

    public static function setSessionData($rotulo, Request $request, $token)
    {       
        $request->session()->put($rotulo, $token);
    }

    public static function destroySessionData(Request $request, $rotulo)
    {
        $request->session()->forget($rotulo);
    }
}

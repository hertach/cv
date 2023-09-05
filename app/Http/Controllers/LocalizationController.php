<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale, Request $request)
    {
        $request->user()->locale = $locale;
        $request->user()->save();
        App::setLocale($locale);
        Session::put("locale", $locale);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage(Request $request)
    {
        $locale = $request->input('language');

        // if (in_array($locale, config('app.locales'))) {
        //     $request->session()->put('locale', $locale);
        // }

        session(['language_switched' => $locale]);

        // var_dump(session('language_switched')); exit;

        return redirect()->back()->with(['language_switched' => $locale]);
    }
}

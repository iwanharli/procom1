<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index() {
        return view('pages.portal.careers');
    }

    public function careerDetail() {
        return view('pages.portal.careers-detail');
    }
}

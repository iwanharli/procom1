<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\App;

class TestController extends Controller
{

    public function init()
    {
        \Artisan::call("migrate");
        \Artisan::call("db:seed");
        \Artisan::call("storage:link");

        echo "initialized";
    }
}

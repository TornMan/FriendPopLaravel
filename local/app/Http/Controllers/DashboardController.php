<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;  //date-times
use View;

class DashboardController extends Controller
{

    public function index()
    {
      $current = Carbon::now();


        return View::make('dashboard')->with('current', $current);
        //return view('dashboard',);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;  //date-times
use View;
use App\Oncall;

class DashboardController extends Controller
{

    public function index()
    {
      $current = Carbon::now();
      $dash_data = Oncall::all();

        return View::make('dashboard')->with('current', $current);
        //return view('dashboard',);
    }
}

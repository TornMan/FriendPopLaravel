<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Employment;

class EmployeeController extends Controller
{

    public function index()
    {
        return view('employee');
    }
}
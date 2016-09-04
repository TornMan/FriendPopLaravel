<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{

    public function index()
    {
        return view('employee');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OncallController extends Controller
{

    public function index()
    {
        return view('oncall');
    }
}
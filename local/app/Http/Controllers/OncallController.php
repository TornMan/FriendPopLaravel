<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Oncall;

class OncallController extends Controller
{

    public function index()
    {
        $oncall_data = $this->getOncall(null);
        return view('oncall',  compact('oncall_data'));
    }
    
    /* Helper Function */
    function getOncall($filter){
        if(!$filter){
            return Oncall::all();
        }
    }
}
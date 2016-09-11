<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Oncall;
use App\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OncallController extends Controller
{

    public function index()
    {
        $oncall_data = $this->getOncall(null);
        $department_data = $this->getDepartment();
        return view('oncall',  compact('oncall_data','department_data'));
    }
    
    public function update(Request $req)
    {
       // dd($req);
        Oncall::where('date', $req->date_change)->
            update([$req->department => $req->data_change]);
       
    }
    
    /* Helper Function */
    function getOncall($filter){
        if(!$filter){
            //return Oncall::all();
            return Oncall::select(DB::raw("* , DATE_FORMAT(date,'%a %d/%m') AS date_new"))->get();
        }
    }
    
    function getDepartment(){
        return Department::all();
    }
}
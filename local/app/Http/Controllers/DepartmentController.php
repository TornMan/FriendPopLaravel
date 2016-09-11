<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Department;
use App\Oncall;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        return view('department');
    }
    
    public function store(Request $req)
    {
        $this->addDepartment($req->department_name);
        
        $this->addFieldOncall($req->department_name);

    }
    
    public function addDepartment($department_name)
    {
        $department = new Department();
        $department->department_name = $department_name;
        $department->save();
    }
    
    public function addFieldOncall($department_name)
    {
        
        DB::statement(' ALTER TABLE oncall ADD COLUMN '. $department_name . ' varchar(255) DEFAULT NULL ');
    }
    
    
}
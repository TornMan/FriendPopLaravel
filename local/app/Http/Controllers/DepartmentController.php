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
        $department_list = $this->getDepartment();
        return view('department', compact('department_list'));
    }
    
    public function store(Request $req)
    {
        $last_insert_id = $this->addDepartment($req->department_name, $req->description);
        
        if($last_insert_id !== false){
            $this->addFieldOncall($req->department_name);
            echo $last_insert_id;
        }else {
            echo false;
        }
        
    }
    
    public function update(Request $req){
        $department_id = $req->department_id;
        
        if($req->update_field == "department_name"){
            $new_name = $req->new_name;
            $old_name = $req->old_name;
            
            $check_up = Department::where('id', $department_id)->update(['department_name' => $new_name]);
            
            if($check_up){
               DB::statement(' ALTER TABLE oncall CHANGE '. $old_name . ' ' . $new_name . ' varchar(255)'); 
            }

        }else if($req->update_field == "description"){
            $new_description = $req->new_description;
            
            Department::where('id', $department_id)->update(['description' => $new_description]);
        }
        
    }
    
    public function delete(Request $req){
        $department_id = $req->department_id;
        $department_name = $req->department_name;
        
        Department::where('id', $department_id)->delete();
        DB::statement(' ALTER TABLE oncall DROP COLUMN '.$department_name);
        
    }
    
    /* Helper Function */
    
    public function getDepartment()
    {
        $department = new Department();
        return $department::all();
    }
    
    public function addDepartment($department_name, $description)
    {
        $department = new Department();
        $department->department_name = $department_name;
        $department->description = $description;
        
        if($department->save())
        {
           return $department->id; 
        } else {
           return false;
        }
        
    }
    
    public function addFieldOncall($department_name)
    {
        DB::statement(' ALTER TABLE oncall ADD COLUMN '. $department_name . ' varchar(255) DEFAULT NULL ');
    }
    
    
}
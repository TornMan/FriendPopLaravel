@extends('layouts.default')

@section('content')

<script>
    function reloadDepartment(){
        $.get("{{ url('/get/department') }}",function(res){;
            $('#department_table').dataTable().fnDestroy();
            $('#department_table > tbody').empty(); //bad code

            for(var i = 0; i< res.length; i++){
                var dep_name = res[i]['department_name'],
                    dep_description = res[i]['description'],
                    id_dep = res[i]['id'];

                $('#department_table > tbody').append(
                    '<tr>' +
                    '<td>' +
                    dep_name +
                    '<span style="float:right;" onclick="updateDepName(\''+id_dep+'\',\''+ dep_name + '\')"><i class="fa fa-pencil" aria-hidden="true"></i></span>'+
                    '</td>'+
                    '<td>' +
                    dep_description +
                    '<span style="float:right;" onclick="updateDepDescription(\''+id_dep+'\',\''+ dep_description + '\')"><i class="fa fa-pencil" aria-hidden="true"></i></span>'+
                    '</td>'+
                    '<td>' +
                    '<span  onclick="delDep(\''+id_dep+'\',\''+ dep_name + '\')"><i class="fa fa-trash-o" aria-hidden="true"></i></span>'+
                    '</td>'+
                    '</tr>');
            }
            $('#department_table').dataTable();
        });
    }
    
    function updateDepName(id_dep, old_name){
        reloadDepartment();
        var change_name = prompt("Please enter new name", old_name);
        alert(change_name);
        
        
        if(change_name !== old_name && change_name){
            
            $.post("{{ url('/edit/department') }}",{
                    "department_id" : id_dep,
                    "new_name" : change_name,
                    "old_name" : old_name,
                    "update_field" : "department_name",
                    "_token" : "{{ csrf_token() }}" 
                }, function(res){
                reloadDepartment();
            }); 
        }
    }
    
    function updateDepDescription(id_dep, old_description){
        var change_description = prompt("Please enter new description", old_description);
        
        if(change_description !== old_description && change_description){
            $.post("{{ url('/edit/department') }}",{
                    "department_id" : id_dep,
                    "new_description" : change_description,
                    "update_field" : "description",
                    "_token" : "{{ csrf_token() }}" 
                }, function(res){
                reloadDepartment();
            }); 
        }
    }
    
    function delDep(id_dep , dep_name){
        var check_del = confirm("Are you sure to delete " + dep_name + " ?");
    
        if (check_del == true) {
             $.post("{{ url('/delete/department') }}",{
                    "department_id" : id_dep,
                    "department_name" : dep_name,
                    "_token" : "{{ csrf_token() }}" 
                }, function(res){
                reloadDepartment();
                alert("ลบข้อมูลแล้ว");
            });            
        } 
    }
</script>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage department</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Department list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="department_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
        <!-- /.panel-body -->
        </div>
    <!-- /.panel -->
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="jumbotron">
            <h3>Add Department</h3>

                <div class="form-group">
                    <label>Name :</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="department_name"  placeholder="Department Name">
                    </div>
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="description" placeholder="Description">
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-lg btn-block" id="add_department" >Add</button>
                </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    
    $('#department_table').dataTable();
    
    reloadDepartment();
    
    $("#add_department").click(function(){
        
        var dep_name = $("#department_name").val(),
            dep_description = $("#description").val();
        
        $.post("{{ url('/add/department') }}",{
            "department_name" : dep_name,
            "description" : dep_description,
            "_token" : "{{ csrf_token() }}" }, function(res){
            
            if(!isNaN(res)){
                $('#department_table').dataTable().fnDestroy();
                $('#department_table > tbody > tr:first').before(
                    '<tr>' +
                    '<td>' +
                    dep_name +
                    '<span style="float:right;" onclick="updateDepName(\''+res+'\',\''+ dep_name + '\')"><i class="fa fa-pencil" aria-hidden="true"></i></span>'+
                    '</td>'+
                    '<td>' +
                    dep_description +
                    '<span style="float:right;" onclick="updateDepDescription(\''+res+'\',\''+ dep_description + '\')"><i class="fa fa-pencil" aria-hidden="true"></i></span>'+
                    '</td>'+
                    '<td>' +
                    '<span  onclick="delDep(\''+res+'\',\''+ dep_name + '\')"><i class="fa fa-trash-o" aria-hidden="true"></i></span>'+
                    '</td>'+
                    '</tr>');
                $('#department_table').dataTable();
                
                alert("เพิ่ม Department แล้ว");
                
                $("#department_name").val("");
                $("#description").val("");
          }
        });
    });
});
</script>
@stop

@extends('layouts.default')

@section('content')

    <input type="text" id="department_name" />
    <input type="button" class="btn" id="add_department" value="Add Department" />



<script>
    $("#add_department").click(function(){
        //alert($("#department_name").val());
        $.post("{{ url('/add/department') }}",{
            "department_name" : $("#department_name").val(),
                    _token: "{{ csrf_token() }}",
                                 },
               function(res){});
    });
    
    

</script>

@stop
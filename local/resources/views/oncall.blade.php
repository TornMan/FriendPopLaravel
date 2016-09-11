@extends('layouts.default')

@section('content')
Year : <select id='select_year'></select> 
Month : <select id='select_month'></select>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage oncall</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div id="example"></div>
<input id="save_data" type="button" value="Save Data" />

<script>
    function create_select_year(){
        
        var this_year = (new Date()).getFullYear();
        var diff_year = this_year - 2016;
        
        $('#select_year').append('<option value="'+ this_year + '">'+ this_year +'</option>');
        
        for(var i = 0; i < diff_year; i++){
           $('#select_year').append(
               '<option value="'+ (this_year-(i+1)) + '">'+(this_year-(i+1))+'</option>'
           ); 
        }
    }
    
    create_select_year();
    
    function create_select_month(){
        
        for(var i = 1; i <= 12; i++){
            $('#select_month').append(
               '<option value="'+ i + '">'+i+'</option>'
            ); 
        }
    }
    
    create_select_month();
    
</script>

<script>
    var arr_head = ['Date'];
    
    var department_data = {!! json_encode($department_data->toArray()) !!};
    
    for(var i = 0 ; i < department_data.length; i++){
        arr_head.push(department_data[i].department_name);
    }
    
    var data = [],
        container = document.getElementById('example'),
        hot;
    
    data.push(arr_head);

    hot = new Handsontable(container, {
        data: data,
        colHeaders: true,
        contextMenu: true,
        
        afterChange: function(change,source){
            
            if (source === 'loadData') {
                return;
            }
            
            if(change[0][0] == 0 || change[0][1] == 0){
                data[change[0][0]][change[0][1]] = change[0][2];
                hot.loadData(data);
                return;
            }else {
                //console.log(change);
                //console.log(data);
                
                var date_change = data[change[0][0]]['hide_date'];
                var department = data[0][change[0][1]];
                
                //console.log(date_change);
                //console.log(department);
                
                $.post("{{ url('/update/oncall') }}",{ 
                    "date_change" : date_change, 
                    "department" : department, 
                    "data_change" : change[0][3],
                    _token: "{{ csrf_token() }}" 
                },function(res){
                    console.log(res);
                });
            }
        }
    });
    
</script>


<script>
    var oncall_data = {!! json_encode($oncall_data->toArray()) !!};
    console.log(oncall_data);

    function reload_table(oncall_data){

        for(var i = 0;i< oncall_data.length;i++){
            
            var arr_temp = [];
            
            arr_temp.push(oncall_data[i].date_new);
            
            for(var j = 0; j < department_data.length; j++){
                arr_temp.push(
                    oncall_data[i][department_data[j]['department_name']]
                );
            }    
            arr_temp['hide_date'] = oncall_data[i].date;
            
            data.push(arr_temp);
        }

        hot.loadData(data);
    }

    reload_table(oncall_data);

    $("#save_data").click(function(){
      console.log(data);
        /*
      data.push(['30','ปัญจสาย','กิตติ','อดิศักดิ์','จิรายุ','วิชัย','ทักษิณา','ศุภกร','สรสิช','ฐากร','ภัทรพงษ์','วสวัตติ์']);
      hot.loadData(
          data // here you would define a new renderer for whatever cells you want to change the renderer for
      );
       */ 
    });
</script>

@stop

@extends('layouts.default')

@section('content')

<div id="example"></div>
<input id="save_data" type="button" value="Save Data" />



<script>
    var data = [

        ['Date','USMP','Olympus','USSD','VASS-01','VASS-02','VAM01','VAM02','FE-Core','BE-Core','SuperNova','IMSO1'],
      
                ],
        container = document.getElementById('example'),
        hot;

        hot = new Handsontable(container, {
            data: data,
            colHeaders: true,
            contextMenu: true
        });
</script>


<script> 
    var oncall_data = {!! json_encode($oncall_data->toArray()) !!};
    console.log(oncall_data);
    
    function reload_table(oncall_data){
        
        for(var i = 0;i< oncall_data.length;i++){
            data.push([
                oncall_data[i].date,
                oncall_data[i]['USMP'],
                oncall_data[i]['Olympus'],
                oncall_data[i]['USSD'],
                oncall_data[i]['VASS-01'],
                oncall_data[i]['VASS-02'],
                oncall_data[i]['VAM01'],
                oncall_data[i]['VAM02'],
                oncall_data[i]['FE-Core'],
                oncall_data[i]['BE-Core'],
                oncall_data[i]['SuperNova'],
                oncall_data[i]['IMSO1'],
            ]);
        }
        
        hot.loadData(data);
    }

    reload_table(oncall_data);
    
    $("#save_data").click(function(){
      console.log(data);
      data.push(['30','ปัญจสาย','กิตติ','อดิศักดิ์','จิรายุ','วิชัย','ทักษิณา','ศุภกร','สรสิช','ฐากร','ภัทรพงษ์','วสวัตติ์']);
      hot.loadData(
          data // here you would define a new renderer for whatever cells you want to change the renderer for
      );
    });
</script>

@stop

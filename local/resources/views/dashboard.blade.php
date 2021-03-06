@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Oncall management on {!!$current->format('F Y')!!}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Kitchen Sink
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>USMP</th>
                                <th>Olympus</th>
                                <th>USSD</th>
                                <th>VASS-01</th>
                                <th>VASS-02</th>
                                <th>VAMO1</th>
                                <th>VAMO2</th>
                                <th>FE-Core</th>
                                <th>BE-Core</th>
                                <th>SuperNova</th>
                                <th>IMSO1</th>



                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
  <!-- /.row -->


















@stop

@extends('layouts.default')

@section('content')



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
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Rendering engine</th>
                                                        <th>Browser</th>
                                                        <th>Platform(s)</th>
                                                        <th>Engine version</th>
                                                        <th>CSS grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 4.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">4</td>
                                                        <td class="center">X</td>
                                                    </tr>
                                                    <tr class="even gradeC">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 5.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">5</td>
                                                        <td class="center">C</td>
                                                    </tr>
                                                    <tr class="odd gradeA">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 5.5</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">5.5</td>
                                                        <td class="center">A</td>
                                                    </tr>
                                                    <tr class="even gradeA">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 6</td>
                                                        <td>Win 98+</td>
                                                        <td class="center">6</td>
                                                        <td class="center">A</td>
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
                            <!-- /.col-lg-12 -->
                        </div>





















            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h3>Add member</h3>

                        <div class="form-group">
                          <label>Name :</label>
                          <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Harrry Potter">
                          </div>
                        </div>


                        <div class="form-group">
                          <label>Telephone :</label>
                          <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="08xxxxxxxx">
                          </div>
                        </div>





                        <div class="form-group">
                          <button type="button" class="btn btn-primary btn-lg btn-block">Save</button>
                        </div>


                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



@stop

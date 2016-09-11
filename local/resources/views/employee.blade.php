@extends('layouts.default')

@section('content')

<!DOCTYPE html>



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->







            <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        DataTables Advanced Tables
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Telephone</th>
                                                        <th>Email</th>
                                                        <th>Department</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>1</td>
                                                        <td>123456</td>
                                                        <td>Sataporn Buayai</td>
                                                        <td class="center">0875014481</td>
                                                        <td class="center">satab550@dimen.postbox.in.th</td>
                                                        <td class="center">VAMO</td>
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
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
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
                          <label>E-mail :</label>
                          <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="@ais.co.th">
                          </div>
                        </div>

                        <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                                <option>USMP</option>
                                <option>Olympus</option>
                                <option>USSD</option>
                                <option>VASS-01</option>
                                <option>VASS-02</option>
                            </select>
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

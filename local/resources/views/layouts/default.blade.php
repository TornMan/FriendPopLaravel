<!DOCTYPE html>
<html>
    <head>
        <title>VTOP Oncall</title>
        <script src="js/jquery-1.10.2.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!-- Core CSS - Include with every page -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

          <!-- Page-Level Plugin CSS - Dashboard -->
          <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
          <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

          <!-- Page-Level Plugin CSS - Tables -->
          <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

          <!-- SB Admin CSS - Include with every page -->
          <link href="css/sb-admin.css" rel="stylesheet">

          <script src="dist/handsontable.full.js" data-jsfiddle="common"></script>
          <link href="dist/handsontable.full.css" media="screen" rel="stylesheet" data-jsfiddle="common">

    </head>












    <body>
      <div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">VTOP Oncall Management</a>
        </div>
        <!-- /.navbar-header -->

<!--
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
-->

<!-- end header -->

<!-- sidebar -->
        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                      <a href="{{ url('/dashboard') }}"><i class="fa fa-edit fa-fw"></i>Dashboard</a>
                    </li>


                    <li>
                        <a href="{{ url('/oncall') }}"><i class="fa fa-dashboard fa-fw"></i>On call schedule</a>
                    </li>

                    <li>
                        <a href="{{ url('/employee') }}"><i class="fa fa-table fa-fw"></i>Employee management</a>
                    </li>
                    <li>
                        <a href="{{ url('/department') }}"><i class="fa fa-edit fa-fw"></i>Department management</a>
                    </li>


                </ul>
            </div>
        </div>
<!-- end sidebar -->

    </nav>

      <div id="page-wrapper">
        @yield('content')
      </div>
    </div>
        <!-- Core Scripts - Include with every page -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

        <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
        <!-- Page-Level Plugin Scripts - Dashboard -->
        <!-- <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="js/plugins/morris/morris.js"></script> -->

        <!-- SB Admin Scripts - Include with every page -->
        <script src="js/sb-admin.js"></script>

        <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
        <!-- <script src="js/demo/dashboard-demo.js"></script> -->

        <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
        </script>



    </body>

    </html>

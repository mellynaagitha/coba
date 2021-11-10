<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <style type="text/css">
        .biasa:hover{
            cursor: default;
        }
        .besar{
            font-size: 60px;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{URL::asset('css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand biasa">Admin : {{ Session::get('nama') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
          @if(session('level') == '1')
            <li><a href="/admin"><i class="fa fa-dashboard"></i> List Admin</a></li>
            <li><a href="/listK"><i class="fa fa-table"></i> List Konten</a></li>
          @endif
            <li><a href="/plusK"><i class="fa fa-font"></i> Tambah Konten</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Akun <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/akunSet"><i class="fa fa-wrench"> Pengaturan Akun</i></a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <h1 class="besar" align="center">Selamat Datang Di Halaman Admin</h1>
        <br>
        <br>

      @yield('isi')

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{URL::asset('js/jquery-1.10.2.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="{{URL::asset('js/morris/chart-data-morris.js')}}"></script>
    <script src="{{URL::asset('js/tablesorter/jquery.tablesorter.js')}}"></script>
    <script src="{{URL::asset('js/tablesorter/tables.js')}}"></script>

  </body>
</html>
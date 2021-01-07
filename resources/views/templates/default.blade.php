<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>TES UNICO</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/user.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-datepicker/css/datepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-daterangepicker/daterangepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-timepicker/compiled/timepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('assets/dataTables.bootstrap4.min.css')}}">


  <!-- multiple file upload -->
  <link rel="stylesheet" href="{{ asset('assets/lib/file-uploader/css/jquery.fileupload.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/lib/file-uploader/css/jquery.fileupload-ui.css') }}">
  <!-- CSS adjustments for browsers with JavaScript disabled -->
  <noscript>
    <link rel="stylesheet" href="{{ asset('assetslib/file-uploader/css/jquery.fileupload-noscript.csscss') }}">
  </noscript>
  <noscript>
      <link rel="stylesheet" href="{{ asset('assetslib/file-uploader/css/jquery.fileupload-ui-noscript.csscss') }}">
  </noscript>
  <!-- sweetalert -->
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

  <!-- grafik -->
  <script src="https://code.highcharts.com/highcharts.js"></script>

  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <!--external css-->
  <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/gritter/css/jquery.gritter.css') }}">
   
 

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/lib/chart-master/Chart.js') }}"></script>

   
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>TES<span>UNICO</span></b></a>
      <!--logo end-->
      @if(Auth::user()->level == 'Admin')
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- inbox dropdown start-->
          <?php 
              $akses = \DB::select("SELECT * from users where hak_akses = 'Pending'");
          ?>
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">{{count($akses)}}</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Anda Memiliki {{count($akses)}} User Yang Menunggu Konfirmasi Anda Untuk Hak Akses</p>
              </li>
              <li>
                  <br><center><span class="label label-danger"><i class="fa fa-bell"></i>
                   User Butuh Konfirmasi Hak Akses !!
                  </span></center><br>
              </li>
              <li>
                <a href="/user">Lihat Seluruh User</a>
              </li>
            </ul>
          </li>
        </ul>
        <!--  notification end -->
      </div>
      @endif
      <?php 
        $hak = DB::table('users')
              ->join('tb_mahasiswa','users.bp_nip','=','tb_mahasiswa.bp_mahasiswa')
              ->select('users.*','tb_mahasiswa.bp_mahasiswa')->get();
        ?>
      @if(Auth::user()->level == 'Mahasiswa' && Auth::user('bp_nip',$hak)->hak_akses == 'Aktif')
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"><i class="fa fa-star"></i></span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Anda telah diberikan hak akses oleh admin agar bisa mengedit data User.</p>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      @endif
      @if(Auth::user()->level == 'Mahasiswa' && Auth::user('bp_nip',$hak)->hak_akses == 'Pending')
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              </a>
          </li>
        </ul>
      </div>
      @endif
      <div class="top-menu">
        {{-- <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/lock">Lock Screen</a></li>
        </ul> --}}
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{route('logout')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      
        <!-- sidebar menu start-->
        @include('templates.sidebar')
        <!-- sidebar menu end-->
      
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      @include('sweetalert::alert')
           @yield('content')
        </section>
         
    </section>
    <!--main content end-->
    <!--footer start-->
   
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->

  <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('assets/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('assets/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('assets/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/lib/jquery.sparkline.js') }}"></script>

  <!--common script for all pages-->
  <script src="{{ asset('assets/lib/common-scripts.js') }}"></script>
  <script type="{{ asset('assets/text/javascript" src="lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="{{ asset('assets/text/javascript" src="lib/gritter-conf.js') }}"></script>
  <script src="{{asset('assets/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/lib/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/lib/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/lib/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
  <script src="{{ asset('assets/lib/advanced-form-components.js') }}"></script>

  <!-- sweetalert -->
    <script type="text/javascript" language="javascript" src="sweetalert2.all.min.js"></script>
    <script type="text/javascript" language="javascript" src="sweetalert2.min.js"></script>
<script src="{{asset('assets/datatables.min.js')}}"></script>
 <script src="{{asset('assets/dataTables.bootstrap4.min.js')}}"></script>
 <script type="text/javascript">$(document).ready( function () { $('#datatables').DataTable();} ); 
</script>
 <script type="text/javascript">$(document).ready( function () { $('#datatables2').DataTable();} ); 
</script>
 <script type="text/javascript">$(document).ready( function () { $('#datatables3').DataTable();} ); 
</script>
  <!--script for this page-->
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
  <script src="{{ asset('assets/lib/sparkline-chart.js') }}"></script>
  <script src="{{ asset('assets/lib/zabuto_calendar.js') }}"></script>
  <script src="{{asset('assets/lib/form-component.js')}}"></script>
 
 <script src="{{asset('assets/lib/bootstrap-switch.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to SIROTI!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>

  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

 @yield('js')
</body>

</html>

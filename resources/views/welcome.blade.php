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

</head>

<body>
  <section id="container" style="width: 100%;">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="top-menu">
        <div class="row">
          <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('login') }}">Log In</a></li>
          <li><a class="logout" href="{{ route('register') }}">Register</a></li>
        </ul>
        </div>

      </div>
      <div class="row">
        <a href="#" class="logowelcome"><center><b>TES<span>UNICO</span></b></center></a>
      </div>
      <!--logo start-->

     
      
      <!--logo end-->

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
<section class="wrapper" style="margin-top: 70px;" style="width: 100%;">

  <div class="content-paneldepan" style="width: 100%;">
    <hr>  
    <div class="row mb">      
        
        <center><h1><strong>SILAHKAN LOGIN KALAU SUDAH MEMILIKI AKUN.</strong></h1></center>
        <center><h1><strong>SILAHKAN PILIH REGISTER JIKA BELUM MEMILIKI AKUN.</strong></h1></center>
        <center><h1><strong>CEK INBOX EMAIL ANDA SETELAH MELAKUKAN REGISTER,</strong></h1></center>
        <center><h1><strong> APABILA TIDAK ADA SILAHKAN CEK SPAM EMAIL ANDA.</strong></h1></center>
        <center><h1><strong> SETELAH DI VERIFIKASI DI EMAIL.</strong></h1></center>
        <center><h1><strong> SILAHKAN LOGIN KEMBALI.</strong></h1></center>
       
      </div>
      <hr>
              <table  class="table table-bordered table-advance table-hover table-responsive" id="datatables" style="width: 100%;">
                  
              </table>
            </div>
         
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
  <!--script for this page-->
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
  <script src="{{ asset('assets/lib/sparkline-chart.js') }}"></script>
  <script src="{{ asset('assets/lib/zabuto_calendar.js') }}"></script>
  <script src="{{asset('assets/lib/form-component.js')}}"></script>
 
 <script src="{{asset('assets/lib/bootstrap-switch.js')}}"></script>

 

 
</body>

</html>

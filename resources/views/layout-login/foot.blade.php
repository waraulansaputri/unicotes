<!-- js placed at the end of the document so the pages load faster -->
    
<script src="{{asset('assets/lib/jquery/jquery.min.js') }}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{asset('assets/lib/jquery.backstretch.min.js') }}"></script>
    <script>
    $.backstretch("{{asset('assets/img/login-bg.jpg')}}", {
      speed: 500
    });
    // $.backstretch("{{asset('assets/img/bg.jpg')}}", {
    //   speed: 500
    // });
  </script> 

 <script src="{{asset('assets/jshideorshow/jquery.min.js')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
      $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
    $("#hak_akses").hide();
    });
  </script>




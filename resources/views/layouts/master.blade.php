
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{ config('NICN CMS', 'NICN-CMS') }}</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{URL::to('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{URL::to('assets/css/argon.css?v=1.2.0')}}" type="text/css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">

</head>

<body>
  <!-- Sidenav -->
  @if (Auth::user()->clrs == 5)
  @include('navbars.sideNav')
  @endif
  
  @if (Auth::user()->clrs == 2)
  @include('navbars.user_nav')
  @endif

  <!-- Main content -->
  <div class="main-content" id="panel">
    
    <!-- Topnav -->
    @include('navbars.navbar')
    <!-- Header -->
    <!-- Header -->
    @yield('content')
  <!-- Footer -->
  	@include('navbars.footer')
  </div>
	  
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{URL::to('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{URL::to('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{URL::to('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>
  <script>  
    $(".datepicker" ).datepicker({
        
        format: 'yyyy-mm-dd'
    });

    $("#division").change(function(){
            event.preventDefault();
            document.getElementById('division-cases').submit();

    });
    
    $("#navbar-search-main").change(function(){
        event.preventDefault();
        document.getElementById('division-cases').submit();

    });

    $("#testLink").click(function(){
      event.preventDefault();
      document.getElementById('quarter').submit();
    });

    $(document).ready( function () {
      // $('#casesTable').DataTable({
      //   buttons: [
      //   'copy', 'excel', 'pdf'
      //   ]
      // });

      var table = $('#casesTable').DataTable();
 
    new $.fn.dataTable.Buttons( table, {
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    } );
 
    table.buttons().container()
        .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
          
    });
    
</script>
  <!-- Argon JS -->
  <script src="{{URL::to('assets/js/argon.js?v=1.2.0')}}"></script>

  @yield('scripts')
</body>

</html>

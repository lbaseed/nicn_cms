
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?php echo e(config('NICN CMS', 'NICN-CMS')); ?></title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/argon.css?v=1.2.0')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/dataTables.bootstrap5.min.css')); ?>" >

  <?php echo $__env->yieldContent('styling'); ?>

</head>

<body>
  <!-- Sidenav -->
  <?php if(Auth::user()->clrs == 5): ?>
  <?php echo $__env->make('navbars.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
  
  <?php if(Auth::user()->clrs == 2): ?>
  <?php echo $__env->make('navbars.user_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    
    <!-- Topnav -->
    <?php echo $__env->make('navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header -->
    <!-- Header -->
    <?php echo $__env->yieldContent('content'); ?>
  <!-- Footer -->
  	<?php echo $__env->make('navbars.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
	  
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo e(URL::to('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(URL::to('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(URL::to('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
  <script src="<?php echo e(URL::to('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(URL::to('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(URL::to('assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(URL::to('assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  <script src="<?php echo e(URL::to('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
  
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

    
    
</script>
  <!-- Argon JS -->
  <script src="<?php echo e(URL::to('assets/js/argon.js?v=1.2.0')); ?>"></script>

  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH /media/ceo/DATA/All_Git_repo/nicn_cms/resources/views/layouts/master.blade.php ENDPATH**/ ?>
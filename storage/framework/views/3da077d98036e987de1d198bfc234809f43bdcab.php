

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4">
  <meta name="author" content="SOENG SOUY">
  <title><?php echo e(config('NICN CMS', 'NICN-CMS')); ?></title>

  
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/argon.css?v=1.2.0')); ?>" type="text/css">
</head>

<body class="bg-default">
    <style>

        html, body {margin: 0; height: 100%; padding-top: 5rem overflow: hidden}
        @media (min-width: 992px)
        {
          .pt-lg-9, .py-lg-9 {
              padding-top: 10rem !important;
          }
        }
        @media (max-width: 992px)
        {
          .pt-md-9, .py-md-9 {
              padding-top: 20rem !important;
          }
        }
        .bg-default {
            background-color: #BDD4E7 !important;
        }

    </style>
    
    <!-- Main content -->
    <div class="main-content header py-5 pt-5 pt-sm-9 pt-lg-9">
    <!-- Header -->
    <!-- Page content -->
    <div class="container mt-4 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5 ">
                        <div class="text-muted text-center mt-2 mb-3"><h3>Sign in to NICN Case Portal (Gombe)</h3></div>
                            <div class="btn-wrapper text-center d-none">
                                <a href="" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon"><img src="<?php echo e(URL::to('assets/img/icons/common/github.svg')); ?>"></span>
                                    <span class="btn-inner--text">Github</span>
                                </a>
                                <a href="" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon"><img src="<?php echo e(URL::to('assets/img/icons/common/google.svg')); ?>"></span>
                                    <span class="btn-inner--text">Google</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Sign in with credentials</small>
                            </div>
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>                
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>"  autocomplete="off" autofocus placeholder="File Number" type="text">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="off" placeholder="Password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox"  name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                                </div>
                                                   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?php echo e(URL::to('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
    <!-- Argon JS -->
    <script src="<?php echo e(URL::to('assets/js/argon.js?v=1.2.0')); ?>"></script>

</body>
</html>
<?php /**PATH C:\www\laravel_projects\nicn_cms\resources\views/auth/login.blade.php ENDPATH**/ ?>
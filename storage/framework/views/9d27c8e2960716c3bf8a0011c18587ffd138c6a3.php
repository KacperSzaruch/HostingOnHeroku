<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Argon Dashboard')); ?></title>
        <!-- Favicon -->
        <link href="<?php echo e(asset('argon')); ?>/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="<?php echo e(asset('argon')); ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="<?php echo e(asset('argon')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="<?php echo e(asset('argon')); ?>/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>
    <body class="<?php echo e($class ?? ''); ?>">
        <?php if(auth()->guard()->check()): ?>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            <?php echo $__env->make('layouts.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>



        <div class="main-content">
            <?php if(auth()->guard()->check()): ?>
                                     <!-- Top navbar -->
                    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <!-- Brand -->
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo e(route('home')); ?>"><?php echo e(__('')); ?></a>
                            <!-- Form -->
                            <!-- User -->
                            <ul class="navbar-nav align-items-center d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                        
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 text-sm  font-weight-bold"><?php echo e(auth()->user()->name); ?> </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                      <h6 class="text-overflow m-0">Welcome!</h6>
                                    </div>
                                    <a href="/profil" class="dropdown-item">
                                      <i class="ni ni-single-02"></i>
                                      <span>Profil</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                      <i class="ni ni-settings-gear-65"></i>
                                      <span>Ustawienia</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                      <i class="ni ni-bell-55"></i>
                                      <span>Powiadomienia</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                      <i class="ni ni-support-16"></i>
                                      <span>Support</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/logout" class="dropdown-item">
                                      <i class="ni ni-user-run"></i>
                                      <span>Wyloguj</span>
                                    </a>
                                  </div>
                                </li>
                            </ul>
                        </div>

                    </nav>

            <?php endif; ?>
    
            <?php if(auth()->guard()->guest()): ?>
                                <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
                    <div class="container px-4" style="font-size: 50px;">
                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                           <i class="ni ni-planet"></i>  Learnee
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-collapse-main">
                            <!-- Collapse header -->
                            <div class="navbar-collapse-header d-md-none">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="<?php echo e(route('home')); ?>">
                                            <img src="<?php echo e(asset('argon')); ?>/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Navbar items -->
                            <ul class="navbar-nav ml-auto">                
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="<?php echo e(route('register')); ?>">
                                        <i class="ni ni-circle-08"></i>
                                        <span class="nav-link-inner--text"><?php echo e(__('Rejestracja')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="<?php echo e(route('login')); ?>">
                                        <i class="ni ni-key-25"></i>
                                        <span class="nav-link-inner--text"><?php echo e(__('Login')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="<?php echo e(route('profile.edit')); ?>">
                                        <i class="ni ni-single-02"></i>
                                        <span class="nav-link-inner--text"><?php echo e(__('Profil')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            <?php endif; ?>
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->make('layouts.footers.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <script src="<?php echo e(asset('argon')); ?>/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo e(asset('argon')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        <?php echo $__env->yieldPushContent('js'); ?>
        
        <!-- Argon JS -->
        <script src="<?php echo e(asset('argon')); ?>/js/argon.js?v=1.0.0"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\spinProject\resources\views/layouts/app2.blade.php ENDPATH**/ ?>
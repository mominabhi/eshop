<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dynamic Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo e(asset('assets/backend/images/favicon.ico')); ?>" type="image/x-icon" />
    <!-- fontawesome icon -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/fonts/fontawesome/css/fontawesome-all.min.css')); ?>" />
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/plugins/animation/css/animate.min.css')); ?>" />

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/style.css')); ?>" />
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="#" class="b-brand">
                    <img src="<?php echo e(asset('assets/backend/images/logo.svg')); ?>" alt="" class="logo images" />
                    <img src="<?php echo e(asset('assets/backend/images/logo-icon.svg')); ?>" alt="" class="logo-thumb images" />
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <img src="<?php echo e(asset('assets/backend/images/logo.svg')); ?>" alt="" class="logo images" />
                <img src="<?php echo e(asset('assets/backend/images/logo-icon.svg')); ?>" alt="" class="logo-thumb images" />
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="main-search open">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . ." />
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="<?php echo e(asset('assets/backend/images/user/avatar-1.jpg')); ?>"
                                            alt="Generic placeholder image" />
                                        <div class="media-body">
                                            <p>
                                                <strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5
                                                    min</span>
                                            </p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="<?php echo e(asset('assets/backend/images/user/avatar-2.jpg')); ?>"
                                            alt="Generic placeholder image" />
                                        <div class="media-body">
                                            <p>
                                                <strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10
                                                    min</span>
                                            </p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?php echo e(asset('assets/backend/images/user/avatar-1.jpg')); ?>" class="img-radius"
                                    alt="User-Profile-Image" />
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li>
                                    <a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Settings</a>
                                </li>
                                <li>
                                    <a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                                        Messages</a>
                                </li>
                                <li>
                                    <a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i>
                                        Lock Screen</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- product profit start -->
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card bg-c-red">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-25">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Total Profit</h6>
                                                    <h3 class="m-b-0 text-white">$1,783</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white">
                                                <span class="label label-danger m-r-10">+11%</span>From Previous Month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card bg-c-blue">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-25">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Total Orders</h6>
                                                    <h3 class="m-b-0 text-white">15,830</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-database text-c-blue f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white">
                                                <span class="label label-primary m-r-10">+12%</span>From Previous Month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card bg-c-green">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-25">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Average Price</h6>
                                                    <h3 class="m-b-0 text-white">$6,780</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white">
                                                <span class="label label-success m-r-10">+52%</span>From Previous Month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card bg-c-yellow">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-25">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Product Sold</h6>
                                                    <h3 class="m-b-0 text-white">6,784</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-tags text-c-yellow f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white">
                                                <span class="label label-warning m-r-10">+52%</span>From Previous Month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- product profit end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/backend/js/vendor-all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/pcoded.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\dynamic_shop\resources\views/dashboard.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Wheel</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('assets/css/css_reset.css')); ?>">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('assets/css/jquery.datetimepicker.min.css')); ?>">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/bootstrap-select.min.css')); ?>">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('assets/css/loaders.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('assets/css/index.css')); ?>">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class=" wheel-bg2 ">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children  ">
                                        <a href="<?php echo e(url('/')); ?>">Home</a>

                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="<?php echo e(route('auth_car_list')); ?>"> Listing </a>
                                       
                                       
                                    </li>
                                   
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="<?php echo e(route('auth_contact')); ?>">Contact</a>
                                       
                                    </li>
                                   
                                    </li>
                                    <li class="menu-item ">
                                        <a href="<?php echo e(route('auth_about')); ?>">About</a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="<?php echo e(route('auth_account')); ?>">Account</a>
                                    </li>
                                    <?php if(Auth::check()): ?>
                                        <li class="menu-item ">
                                            <a href="<?php echo e(route('user_reservation')); ?>">Reservation</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="<?php echo e(route('user_activity')); ?>">Activity</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="<?php echo e(route('user_logout')); ?>">Logout</a>
                                        </li>
                                   
                                    <?php endif; ?>
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Listing - List View</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Listing</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="prosuct-wrap">
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    
                </div>
                
            </div>
            <div class="container padd-lr0 xs-padd">
                <div class="product-list product-list2 wheel-bgt clearfix">
                    <div class="row">
                        <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/i29.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">2016 Marcedes-Benz SLK</div>
                                        <div class="price-wrap product-cell">
                                            <span>$79</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i40.jpg" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>2 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0 text-center">
                        <div class="wheel-page-pagination marg-lg-t60 marg-lg-b25  ">
                            
                            <a class="page-numbers" href="#">1</a>
                            <span class="page-numbers current">2</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By bigpsfan</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Listings</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/jquery-2.2.4.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/bootstrap.min.js')); ?>"></script>
        <!-- count -->
        <script type="text/javascript" src='<?php echo e(URL::to('assets/js/jquery.countTo.js')); ?>'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/idangerous.swiper.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/equalHeightsPlugin.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/jquery.datetimepicker.full.min.js')); ?>"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/bootstrap-select.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::to('assets/js/index.js')); ?>"></script>
    </body>
</html>
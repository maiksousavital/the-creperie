<?php

if (!$this->session->userdata('is_logged')) {

    header('Location: login');

}

?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Creperie Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">

    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

    <script src="<?php echo base_url(); ?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>


<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index"><img class="main-logo" src="<?php echo base_url(); ?>assets/admin/img/logo/logo.png"
                                 style="border-radius: 50%; width: 100px" alt=""/></a>
            <strong><img src="<?php echo base_url(); ?>assets/admin/img/logo/logo.png" alt=""
                         style="border-radius: 50%; width: 100px"/></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li><a title="Home" href="index"><i class="fa fa-home icon-wrap" aria-hidden="true"></i> <span
                                    class="mini-sub-pro">Home</span></a></li>

                    <li><a title="Product" href="product-list"><i class="fa big-icon fa-cutlery icon-wrap"
                                                                  aria-hidden="true"></i> <span class="mini-sub-pro">Menu</span></a>
                    </li>

                    <li><a title="About" href="about"><i class="fa fa-info-circle icon-wrap" aria-hidden="true"></i>
                            <span class="mini-sub-pro">About</span></a></li>

                    <li><a title="About" href="gallery"><i class="fa fa-file-image-o icon-wrap" aria-hidden="true"></i>
                            <span class="mini-sub-pro">Gallery</span></a></li>

                    <li><a title="Review" href="review"><i class="fa fa-comments icon-wrap" aria-hidden="true"></i>
                            <span class="mini-sub-pro">Review</span></a></li>

                    <li><a title="Booking" href="booking"><i class="fa fa-calendar icon-wrap" aria-hidden="true"></i>
                            <span class="mini-sub-pro">Booking</span></a></li>

                    <li><a title="Contact" href="contact"><i class="fa fa-envelope icon-wrap" aria-hidden="true"></i>
                            <span class="mini-sub-pro">Contact</span></a></li>

                    <li><a title="Newsletter" href="newsletter"><i class="fa fa-envelope-open icon-wrap" aria-hidden="true"></i>
                            <span class="mini-sub-pro">Newsletter</span></a></li>


                </ul>
            </nav>
        </div>
    </nav>
</div>

<!-- Start Welcome area -->
<div class="all-content-wrapper">

    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                   class="nav-link dropdown-toggle">
                                                    <i class="fa fa-user adminpro-user-rounded header-riht-inf"
                                                       aria-hidden="true"></i>
                                                    <span class="admin-name">Welcome <?php if ($this->session->userdata('is_logged')) {
                                                            echo $this->session->userdata('first_name');
                                                        } ?>!  </span>
                                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                </a>
                                                <ul role="menu"
                                                    class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="register"><span
                                                                    class="fa fa-home author-log-ic"></span>Register</a>
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-user author-log-ic"></span>My
                                                            Profile</a>
                                                    </li>

                                                    <li><a href="<?php echo base_url(); ?>admin/login/logout"><span
                                                                    class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a href="index">Home</a></li>
                                    <li><a href="product-list">Menu</a></li>
                                    <li><a href="about">About</a></li>
                                    <li><a href="review">Review</a></li>
                                    <li><a href="booking">Booking</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="newstellet">Newsletter</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->

    </div>



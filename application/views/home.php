<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Creperie - The First Fast-Casual Creperie in Christchurch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/site/images/fav.png">

    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/76449bf894.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/icomoon.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.0/css/ol.css"
          type="text/css">


</head>


<!-- Start Modal Area -->
<div class="modal fade" id="myModal" name="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title w-100 text-center">Tell Us Your Experience</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>


            <!-- Modal Body -->
            <div class="modal-body">
                <div class="modal-body mx-3">
                    <div class="md-form mb-0">

                        <form enctype='multipart/form-data' method="post" id="formReview">

                            <label style="display:inline-block;" for="input-1" class="control-label">Choose your
                                avatar: </label>
                            <div id="avatars">

                                <label class="avatars">
                                    <input type="radio" name="avatar" id="avatar" name="avatar" value="avatar1.png"/>
                                    <img src="<?php echo base_url(); ?>assets/site/images/avatar1.png" alt=""/>
                                    <input type="radio" name="avatar" id="avatar" name="avatar" value="avatar2.png"/>
                                    <img src="<?php echo base_url(); ?>assets/site/images/avatar2.png" alt=""/>
                                    <input type="radio" name="avatar" id="avatar" name="avatar" value="avatar3.png"/>
                                    <img src="<?php echo base_url(); ?>assets/site/images/avatar3.png" alt=""/>

                                    <div id="avatar_warning_message" class="alert alert-warning mt-1 d-none"></div>
                                </label>

                            </div>


                            <div class="md-form mb-4">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
                                <div id="review_name_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                            <div class="md-form mb-4">
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Your email">
                                <div id="review_email_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                            <div class="md-form mb-0">
                                    <textarea type="text" id="review_text" name="review_text"
                                              class="md-textarea form-control"
                                              placeholder="Your review"
                                              rows="3"></textarea>
                                <div id="review_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>

                            <div class="md-form mb-0">
                                <label style="display:inline-block;" for="input-1" class="control-label">Rate
                                    Us</label>
                                <div class="rateyo" id="rateYo"
                                     data-rateyo-rating="4"
                                     data-rateyo-num-stars="5"
                                     data-rateyo-score="3"></div>
                                <span class='score'>0</span>
                                <span class='result'>0</span>
                                <input type="text" name="rating" style="display: none">

                            </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                        </button>
                        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save
                        </button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- End Modal Area -->


<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>

<!-- Start Pre-Header Area -->
<div class="py-1 bg-black top">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="p-2">Riverside Market, 96 Oxford Terrace, Christchurch, New Zealand
            </div>
            <div class="p-2"><b>Monday - Saturday</b> | 9am - 6pm
            </div>
            <div class="p-2"><b>Sunday</b> | 9am - 4pm
            </div>
        </div>
    </div>
</div>
<!-- End Pre-Header Area -->

<!-- Start Header Area -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="<?php echo base_url(); ?>assets/site/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="#review" class="nav-link">Review</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="#reservation" class="nav-link">Book Your Function</a></li>
            </ul>
        </div>
    </div>
    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
        <li class="ftco-animate"><a href="https://www.facebook.com/TheCreperie.chch/" target="_blank"><span
                        class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="https://www.instagram.com/the.creperie/?hl=en" target="_blank"><span
                        class="icon-instagram"></span></a></li>
    </ul>
</nav>
<!-- End Header Area -->

<!-- Start Banner Area -->
<section class="home-slider owl-carousel js-fullheight" id="home">
    <div class="slider-item js-fullheight video-container">
        <video autoplay muted loop id="myVideo" style="width: 100%">
            <source src="<?php echo base_url(); ?>assets/admin/img/home/<?php echo $home_video[0]['video']; ?>"
                    type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="overlay-desc slider-text">
            <div class="row">
                <div>
                    <h4 class="subheading1 animated swing">the</h4>
                    <h1 class="subheading animated swing">creperie</h1>
                    <h1>The First Fast-Casual Creperie in Christchurch</h1>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start About Area -->
<section class="ftco-section ftco-wrap-about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                <div class="heading-section mb-4 my-5 my-md-0">
                    <span class="subheading">About</span>
                    <h2 class="mb-4">the creperie</h2>
                </div>


                <?php
                if (!empty($about[0]['about'])) {
                    echo '<p>' . $about[0]['about'] . '</p>';
                } else {
                    echo '<h2>' . 'Your text about your business' . '</h2>';
                } ?>


            </div>

            <div class="col-md-7 d-flex">

                <div class="img img-1 mr-md-2"
                     style="background-image: url(<?php echo base_url() ?>assets/admin/img/about/<?php if (isset($about[0]['picture'])) {
                         echo $about[0]['picture'];
                     }else{ echo '<p>'. 'Picture 1' . '</p>'; } ?>);"></div>

                <div class="img img-2 ml-md-2"
                     style="background-image: url(<?php echo base_url() ?>assets/admin/img/about/<?php if (isset($about[0]['picture_2'])) {
                         echo $about[0]['picture_2'];
                     } ?>);"></div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">the creperie</span>
                <h2 class="mb-4">Our Service</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo base_url() ?>assets/site/images/d1.png" alt="market">
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Riverside Market</h3>
                        <p><b>the creperie</b> is located in an exciting new development consisting of a 7-day-trading
                            indoor farmers' market, boutique retail, restaurants, cafes & bars.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo base_url() ?>assets/site/images/d2.png" alt="crepes">
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Premium Ingredients</h3>
                        <p><b>the creperie</b> uses only high quality prime sweet or savory ingredients from local
                            suppliers that are sure to deliver perfect light and fluffy crepes every time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo base_url() ?>assets/site/images/d3.png" alt="chef">
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Core Values</h3>
                        <p><b>the creperie</b> takes a modern approach to fast-casual dining, combining excellence in
                            taste with fast service and unique atmosphere.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <h4 class="mb-5 mt-5">Check out the inspiring story of <b>the creperie</b>'s owner below:</h4>
                <a href="https://www.stuff.co.nz/life-style/food-wine/117153207/young-entrepreneur-cracks-it-big-with-humming-riverside-market-stall"
                   target="_blank">
                    <img border="0" alt="Story on Stuff" id="stuff"
                         src="<?php echo base_url() ?>assets/site/images/stuff.png" width="220"
                         height="91">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Gallery Area -->
<section class="ftco-section" id="gallery">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Photo & Video</span>
                <h2 class="mb-4">Gallery</h2>
            </div>
        </div>
        <div class="photograhy">
            <div class="row no-gutters" id="gallery_pictures">

                <?php $pictures = $pagination['gallery_pictures']; ?>

                <?php foreach ($pictures as $picture): ?>

                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                        <a href="<?php echo base_url() ?>assets/admin/img/gallery/<?php echo $picture->picture ?>"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(<?php echo base_url() ?>assets/admin/img/gallery/<?php echo $picture->picture ?>);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3></h3>
                                <span class="tag"> <?php echo $picture->title ?></span>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>

        </div>

        <div align="center" id="pagination_lin"
             style="background:#333333;"><?php echo $pagination['pagination_link']; ?>
        </div>
    </div>
</section>
<!-- End Gallery Area -->

<!-- Start Menu Area -->
<section class="ftco-section" id="menu">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="ftco-search">
            <div class="row">
                <div class="col-md-12 nav-link-wrap ">
                    <div class="nav nav-pills  text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                           role="tab" aria-controls="v-pills-1" aria-selected="true">Savory</a>
                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                           role="tab" aria-controls="v-pills-2" aria-selected="false">Sweet</a>
                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                           role="tab" aria-controls="v-pills-3" aria-selected="false">Coffee</a>
                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                           role="tab" aria-controls="v-pills-4" aria-selected="false">Tea</a>
                    </div>
                </div>
                <div class="col-md-12 tab-wrap">
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Start Savory Area -->
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                             aria-labelledby="day-1-tab">
                            <div class="row no-gutters d-flex justify-content-md-center">

                                <?php foreach ($menu_list as $menu_item) : ?>

                                    <?php
                                    if ($menu_item['category'] == 1): ?>

                                        <div class="col-md-4">
                                            <div class="flip-box justify-content-md-center">
                                                <div class="item1">
                                                    <div class="flip-box-inner">
                                                        <div class="flip-box-front">
                                                            <img src="<?php echo base_url()?>assets/admin/img/menu/<?php echo $menu_item['picture']; ?>"
                                                                 alt="Ham">
                                                        </div>
                                                        <div class="flip-box-back centered">
                                                            <h2><?php echo $menu_item['title']; ?></h2>
                                                            <p><span><?php echo $menu_item['ingredients']; ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-inner">
                                                    <h4><?php echo $menu_item['title']; ?></h4>
                                                    <div class="cat">$<?php echo $menu_item['price']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </div>
                        </div>
                        <!-- End Savory Area -->

                        <!-- Start Sweet Area -->
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                            <div class="row no-gutters d-flex justify-content-md-center">
                                <!-- <div class="row grid"> -->

                                <?php foreach ($menu_list as $menu_item) : ?>

                                    <?php
                                    if ($menu_item['category'] == 2): ?>

                                        <div class="col-md-4">

                                            <div class="flip-box justify-content-md-center">
                                                <div class="item1">
                                                    <div class="flip-box-inner">
                                                        <div class="flip-box-front">
                                                            <img src="<?php echo base_url()?>assets/admin/img/menu/<?php echo $menu_item['picture']; ?>"
                                                                 alt="Ham">
                                                        </div>
                                                        <div class="flip-box-back centered">
                                                            <h2><?php echo $menu_item['title']; ?></h2>
                                                            <p><span><?php echo $menu_item['ingredients']; ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-inner">
                                                    <h4><?php echo $menu_item['title']; ?></h4>
                                                    <div class="cat">$<?php echo $menu_item['price']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <!-- </div> -->

                            </div>
                        </div>
                        <!-- End Sweet Area -->

                        <!-- Start Coffee Area -->
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row no-gutters d-flex justify-content-md-center">

                                <!--  <div class="row grid">-->

                                <?php foreach ($menu_list as $menu_item) : ?>

                                    <?php
                                    if ($menu_item['category'] == 3): ?>

                                        <div class="col-md-4">

                                            <div class="flip-box justify-content-md-center">
                                                <div class="item1">
                                                    <div class="flip-box-inner">
                                                        <div class="flip-box-front">
                                                            <img src="<?php echo base_url()?>assets/admin/img/menu/<?php echo $menu_item['picture']; ?>"
                                                                 alt="">
                                                        </div>
                                                        <div class="flip-box-back centered">
                                                            <h2><?php echo $menu_item['title']; ?></h2>
                                                            <p>
                                                                <span>Regular Price $<?php echo $menu_item['price']; ?></span>
                                                            <p>
                                                                <span>Large Price $<?php echo $menu_item['large_price']; ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-inner">
                                                    <h4><?php echo $menu_item['title']; ?></h4>

                                                </div>

                                            </div>

                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                                <!-- </div>-->
                            </div>
                        </div>
                        <!-- End Coffee Area -->

                        <!-- Start Tea Area -->
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                            <div class="row d-flex justify-content-md-center tea-section">
                                <!-- <div class="row grid">-->

                                <?php foreach ($menu_list as $menu_item) : ?>

                                    <?php
                                    if ($menu_item['category'] == 4): ?>

                                        <div class="col-md-4">

                                            <div class="flip-box justify-content-md-center">
                                                <div class="item1">
                                                    <div class="flip-box-inner">
                                                        <div class="flip-box-front">
                                                            <img src="<?php echo base_url()?>assets/admin/img/menu/<?php echo $menu_item['picture']; ?>"
                                                                 alt="">
                                                        </div>
                                                        <div class="flip-box-back centered">
                                                            <h2><?php echo $menu_item['title']; ?></h2>
                                                            <p>
                                                                <span>Regular Price $<?php echo $menu_item['price']; ?></span>
                                                            <p>
                                                                <span>Large Price $<?php echo $menu_item['large_price']; ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-inner">
                                                    <h4><?php echo $menu_item['title']; ?></h4>

                                                </div>

                                            </div>

                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                                <!-- </div>-->
                            </div>
                        </div>
                        <!-- End Tea Area -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Menu Area -->

<!-- Start Booking Area -->
<section class="ftco-section img" id="reservation"
         style="background-image: url(<?php echo base_url() ?>assets/site/images/bg-1.jpg)"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                <div class="heading-section ftco-animate mb-5 text-center">
                    <span class="subheading">Reservation</span>
                    <h2 class="mb-4">Book Your Function</h2>
                    <div id="add_booking_success_message" class="alert alert-success mt-1 d-none"></div>
                    <div id="add_booking_error_message" class="alert alert-danger mt-1 d-none"></div>
                </div>
                <form action="#" id="formAddBooking" name="formAddBooking">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                <div id="booking_name_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="-email" class="form-control"
                                       placeholder="Your Email">
                                <div id="booking_email_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" maxlength="12" name="phone" id="phone" class="form-control"
                                       placeholder="Your Phone Number">
                                <div id="booking_phone_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="text" autocomplete="off" class="datepicker form-control"
                                       data-provide="datepicker" name="date" id="date" class="form-control"
                                       placeholder="Date">
                                <div id="booking_date_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Time</label>
                                <input type="time" min="18:00:00" max="21:00:00" name="time" id="time"
                                       class="form-control" id="book_time"
                                       placeholder="Time">
                                <div id="booking_time_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Number of People</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="num_people" id="num_people" class="form-control">
                                        <option value="" disabled selected>Person</option>
                                        <option>2</option>
                                        <option>4</option>
                                        <option>6</option>
                                        <option>8</option>
                                        <option>10+</option>
                                    </select>
                                    <div id="booking_num_people_warning_message"
                                         class="alert alert-warning mt-1 d-none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <input type="submit" id="btn_add_booking" value="Book A Function"
                                       class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Booking Area -->

<!-- Start Review Area -->
<section class="ftco-section testimony-section img" id="review">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Reviews</span>
                <h2 class="mb-4">Satisfied Crepe Lovers</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">

                    <?php foreach ($rating_list as $rating_item) : ?>

                        <div class="item">
                            <div class="testimony-wrap text-center pb-5">
                                <div class="user-img mb-4"
                                     style="background-image: url(<?php echo base_url() . 'assets/site/images/' . $rating_item['avatar']; ?>)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                          <i class="icon-quote-left"></i>
                                        </span>
                                </div>
                                <div class="text p-3">
                                    <p class="mb-4"><?php echo $rating_item['review']; ?></p>
                                    <p class="name"><?php echo $rating_item['name']; ?></p>

                                    <div id="rateYo">

                                        <?php for ($i = 0; $i < $rating_item['rating']; $i++) {
                                            echo '<i class="fas fa-star"></i>';
                                        }
                                        ?>

                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>


        <div id="review_success_message" class="alert alert-success mt-1 d-none"></div>
        <div id="review_error_message" class="alert alert-danger mt-1 d-none"></div>

        <div class="ftco-section-1 img-3" id="divReview"
             style="background-image: url(<?php echo base_url() . 'assets/site/images/bg.jpg' ?>')"
             data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row d-flex justify-content-center py-xl-5">
                    <h2 class="h3 font-weight-bold">TELL US YOUR STORY!</h2>
                </div>
                <div class="row d-flex justify-content-center">
                    <input class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#myModal" type="submit"
                           value="Click Here To Review Us">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Review Area -->

<!-- Start Contact Area -->
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section" id="contact">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Contact Us</span>
                <h2 class="mb-4">Questions?</h2>
            </div>
        </div>
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-5 pt-5 px-2 pb-2 p-md-5 order-md-last">
                <h2 class="h4 mb-2 mb-md-5 font-weight-bold">We'd love to hear from you.</h2>

                <div id="contact_success_message" class="alert alert-success mt-1 d-none"></div>
                <div id="contact_error_message" class="alert alert-danger mt-1 d-none"></div>

                <form name="formContact" id="formContact" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <div id="name_warning_message" class="alert alert-warning mt-1 d-none"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email"
                               id="email" placeholder="Your Email">
                        <div id="email_warning_message" class="alert alert-warning mt-1 d-none"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        <div id="subject_warning_message" class="alert alert-warning mt-1 d-none"></div>
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="4" name="message" id="message" class="form-control"
                                  placeholder="Message"></textarea>
                        <div id="message_warning_message" class="alert alert-warning mt-1 d-none"></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="btn_send_message" value="Send Message"
                               class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <div class="item">
                    <a class="image-link" href="<?php echo base_url(); ?>assets/site/images/map2.jpg">
                        <img src="<?php echo base_url(); ?>assets/site/images/map.jpg" alt="map">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container ftco-info contact-section">
        <div class="row d-flex contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4 font-weight-bold">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6 d-flex">
                <div class="dbox">
                    <p><span>Address:</span> <b>Riverside Market</b>, 96 Oxford Terrace, Christchurch<br>New Zealand
                        8011</p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="dbox">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@thecreperie.co.nz</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Footer Area -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-2 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Opening Hours</h2>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex"><span>Monday</span><span>9:00 - 6:00</span></li>
                        <li class="d-flex"><span>Tuesday</span><span>9:00 - 6:00</span></li>
                        <li class="d-flex"><span>Wednesday</span><span>9:00 - 6:00</span></li>
                        <li class="d-flex"><span>Thursday</span><span>9:00 - 6:00</span></li>
                        <li class="d-flex"><span>Friday</span><span>9:00 - 6:00</span></li>
                        <li class="d-flex"><span>Saturday</span><span>9:00 - 6:00</span></li>
                        <li class="d-flex"><span>Sunday</span><span> 9:00 - 4:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <a href="https://www.facebook.com/TheCreperie.chch/" target="_blank">
                        <i class="fab fa-facebook"></i>
                        <h2 class="ftco-heading-2">Facebook</h2>
                    </a>
                    <div class="fb-page" data-href="https://www.facebook.com/TheCreperie.chch/" target="_blank"
                         data-tabs="timeline" data-width="" data-height="" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/TheCreperie.chch/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/TheCreperie.chch/" target="_blank">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <a href="https://www.instagram.com/the.creperie/?hl=en" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <h2 class="ftco-heading-2">Instagram</h2>
                    </a>
                    <iframe src="http://lightwidget.com/widgets/3afbfb64895c5411948efa2b45371963.html" scrolling="no"
                            allowtransparency="true" class="lightwidget-widget"
                            style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <div id="newsletter_success_message" class="alert alert-success mt-1 d-none"></div>
                    <div id="newsletter_error_message" class="alert alert-error mt-1 d-none"></div>
                    <p>Subscribe to our newsletter to get all updates about discount and offers.</p>
                    <form action="#" id="formNewsletter" class="subscribe-form">
                        <div class="form-group">
                            <input class="form-control mb-2 text-center" placeholder="Enter Email" name="email"
                                   id="email"
                                   type="email">
                            <div id="email_newsLetter_warning_message" class="alert alert-warning mt-1 d-none"></div>
                            <button type="submit" type="button" id="btn_newsletter" value="Subscribe"
                                    class="btn btn-primary form-control submit px-3">Subscribe
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->


<!-- Loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="<?php echo base_url(); ?>assets/site/js/jquery.min.js"></script>


<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/site/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/aos.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/review.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/scrollax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/map.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/main.js"></script>
<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.0/build/ol.js"></script>

<script src="<?php echo base_url(); ?>assets/site/js/myValidations.js"></script>

<script>
    $('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
        startDate: '0d'
    });
</script>

<script>
    var base_url = '<?php echo base_url(); ?>';
</script>

</body>
</html>
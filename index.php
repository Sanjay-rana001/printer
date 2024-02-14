<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $body =
        "Fullname : $fullname
    Email Id :  $email
    Phone No.:  $phone
	Subject : $subject
    Message  :  $message";

    $result = mail("gaursapna897@gmail.com", $subject, $body);
    if ($result > 0) {
        echo "<script>alert('Mail sent successfully')</script>";
    }
}
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Printers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="assets/css/widget.css" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

</head>

<body>
    <!-- Loder Start-->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>
    <!-- Loder End -->


    <!--==================================================-->
    <!----- Start  Main Menu Area ----->
    <!--==================================================-->
    <div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo mt-4">
                        <a class="logo_img" href="index.php" title="techno">
                            <img src="assets/images/hplogo.jpg" alt="" />
                        </a>
                        <a class="main_sticky" href="index.php" title="techno">
                            <img src="assets/images/hplogo.jpg" alt="astute" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <nav class="techno_menu">
                        <ul class="nav_scroll">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#service">Services</a></li>

                        </ul>
                        <div class="donate-btn-header">
                            <a class="dtbtn" href="#contact">Contact</a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <!----- Techno Mobile Menu Area ----->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#service">Service</a></li>

                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Main Menu Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start  Slider Area ----->
    <!--==================================================-->
    <div class="slider_area d-flex align-items-center slider2 landing" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_slider">
                        <div class="slider_content text-center">
                            <div class="slider_text">
                                <div class="slider_text_inner">
                                    <h1>All the drivers you need </h1>
                                    <h1>for your printer</h1>
                                </div>
                                <div class="slider_text_desc pt-4">
                                    <p>Morem upsum dolor set amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut laboret dolore magna aliqua.</p>
                                </div>
                                <div class="slider_button pt-5 d-flex">
                                    <div class="button">
                                        <a href="#">How IT Work <i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__bg">
            <canvas id="intro__canvas" data-colors='["#FBA500", "#FF3C00", "#fff"]'></canvas>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Slider Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start  Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div class="flipbox_area top_feature two pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-code"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Download Drivers</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Download Drivers</h3>
                                </div>
                                <div class="flipbox_desc pt-3">
                                    <p>Get the suitable drivers for you printer with just one click</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>24/7 Online Support</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>we provide the best support 24x7 along with a cup of coffee</h3>
                                </div>
                                <div class="flipbox_desc pt-3">
                                    <p>Our experience design arm, method, helps businesses connect the dots</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-developer"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Compatibility Checking</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Compatibility Checking</h3>
                                </div>
                                <div class="flipbox_desc pt-3">
                                    <p>we offer tools or information to help users determine the compatibility of
                                        drivers with their operating system versions and printer models.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-global-1"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Installation Guide</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Installation Guide</h3>
                                </div>
                                <div class="flipbox_desc pt-3">
                                    <p>Detailed instructions or guides on how to install and update printer drivers for
                                        different operating systems should be provided to assist users through the
                                        installation process.s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Flipbox Top Feature Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start  About Area ----->
    <!--==================================================-->
    <div class="about_area pt-70 pb-70" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>ABOUT US</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>With just one click we</h1>
                            <h1>Provide Best <span>Printer Solutions.</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text bold pt-5">
                            <p>Printer drivers are essential components of the printing process, acting as bridges
                                between the hardware (the printer) and the software (the operating system and
                                applications) on a computer. Without the appropriate driver installed, a computer cannot
                                effectively communicate with a printer, resulting in the inability to print documents,
                                images, or other content..</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>These drivers are designed to accommodate the specific capabilities and requirements
                                    of different printers, including their make, model, and features. They enable users
                                    to harness the full potential of their printers</p>
                                
                            </div>
                        </div>
                        <div class="singel_about_left_inner pl-4">
                            <div class="button two">
                                <a href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner">
                            <img src="assets/images/about-img2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  About Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start  Service Area ----->
    <!--==================================================-->
    <div class="service_area bg_color2 pt-80 pb-70" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-55">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>Drivers</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Download drivers</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text pt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim advis minim veniam, quis nostrud exercitat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35">
                            <i class="fa fa-apple"></i>
                        </div>
                        <div class="service_style_three_title pb-3">
                            <h4>Drivers</h4>
                        </div>
                        <div class="service_style_three_text">
                            <p>Whether bringing new amazing are products and services to market discovering new ways.
                            </p>
                        </div>
                        <div class="service_style_three_bt_icon pt-30">
                            <a href="#"><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="service_style_three_title pb-3">
                            <h4>Drivers</h4>
                        </div>
                        <div class="service_style_three_text">
                            <p>Whether bringing new amazing are products and services to market discovering new ways.
                            </p>
                        </div>
                        <div class="service_style_three_bt_icon pt-30">
                            <a href="#"><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35">
                            <i class="fa fa-codepen"></i>
                        </div>
                        <div class="service_style_three_title pb-3">
                            <h4>Drivers</h4>
                        </div>
                        <div class="service_style_three_text">
                            <p>Whether bringing new amazing are products and services to market discovering new ways.
                            </p>
                        </div>
                        <div class="service_style_three_bt_icon pt-30">
                            <a href="#"><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="service_style_three_title pb-3">
                            <h4>Drivers</h4>
                        </div>
                        <div class="service_style_three_text">
                            <p>Whether bringing new amazing are products and services to market discovering new ways.
                            </p>
                        </div>
                        <div class="service_style_three_bt_icon pt-30">
                            <a href="#"><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="service_style_three_title pb-3">
                            <h4>Drivers</h4>
                        </div>
                        <div class="service_style_three_text">
                            <p>Whether bringing new amazing are products and services to market discovering new ways.
                            </p>
                        </div>
                        <div class="service_style_three_bt_icon pt-30">
                            <a href="#"><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35">
                            <i class="fa fa-camera"></i>
                        </div>
                        <div class="service_style_three_title pb-3">
                            <h4>Drivers</h4>
                        </div>
                        <div class="service_style_three_text">
                            <p>Whether bringing new amazing are products and services to market discovering new ways.
                            </p>
                        </div>
                        <div class="service_style_three_bt_icon pt-30">
                            <a href="#"><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Service Area ----->
    <!--==================================================-->




    <!--==================================================-->
    <!----- Start  Video Area ----->
    <!--==================================================-->
    <div class="video_area pt-100 pb-200" style="background-image:url(assets/images/slider/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center white mb-55">
                        <div class="section_main_title">
                            <h1>We Create Real Impact For Those</h1>
                            <h1>Who Partner With Us.</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video_area pb-200">
        <div class="container">
            <div class="row mrt-200">
                <div class="col-lg-12">
                    <div class="single_video">
                        <div class="single_video_thumb">
                            <img src="assets/images/slider/video.png" alt="" />
                        </div>
                    </div>
                    <div class="single-video text-center">
                        <div class="video-icon mrt-345">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="https://www.youtube.com/watch?v=joDIWOBKh5o"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Video Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- Start  Testimonial Area ----->
    <!--==================================================-->
    <div id="review" class="testimonial-bg pt-100 pb-70">
        <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
            <section id="section-quote">
                <div class="col-lg-12">
                    <div class="section_title text_center mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>TESTIMONIAL</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Happy <span>Clients Says</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <div class="container-pe-quote left">
                    <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <!--Center Testimonials-->
                <div class="container-quote carousel-on">
                    <!--Testimonial 1-->
                    <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                        <p>'Managing everyday banking has finally become fun, fast and easy. Icing on the cake, customer
                            support is super reactive: 5 stars!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Tom Abel De</div>
                            <div class="job">Digital Marketing</div>
                        </div>
                    </div>
                    <!--Testimonial 2-->
                    <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                        <p>'Qonto met my needs straight away. ng has finally become fun, fast andCustomer care is
                            awesome! Period.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Sanuka Santa</div>
                            <div class="job">To To Company</div>
                        </div>
                    </div>
                    <!--Testimonial 3-->
                    <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                        <p>'With Qonto, I've been able to order MasterCard cards in seconds. My purchasing team can now
                            be autonomous with their payments. Qonto is game changer.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Grégoire Pasquet</div>
                            <div class="job">Solf Solution</div>
                        </div>
                    </div>
                    <!--Testimonial 4-->
                    <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                        <p>'Qonto? Easy, fast, efficient. Traditionalng has finally become fun, fast and banks' hassles
                            belong to the past!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Nicolas Puran</div>
                            <div class="job">CEO Founder</div>
                        </div>
                    </div>
                    <!--Testimonial 5-->
                    <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                        <p>'Qonto? A flawless UX and a customer service ng has finally become fun, fast and that cares
                            so much. This is just incredible!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Mathieu Jouhet</div>
                            <div class="job">Freelance @Hello Mat</div>
                        </div>
                    </div>
                    <!--Testimonial 6-->
                    <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                        <p>'I needed a bank similar to a SaaS for LiveMentor: ng has finally become fun, fast and I
                            think I found it.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Jadran</div>
                            <div class="job">Web Development</div>
                        </div>
                    </div>
                    <!--Testimonial 7-->
                    <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                        <p>'I can say 'Goodbye' to the banking pains I had to ng has finally become fun, fast and bear
                            with, and 'hello' to a way to do finance that makes sense.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Digong Frando</div>
                            <div class="job">CEO Officience</div>
                        </div>
                    </div>
                    <!--Testimonial 8-->
                    <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                        <p>'Qonto is 100% in tune with what we do at Alan.eu: a user-friendly service, a user-centric
                            interface and a very reactive customer support.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Samuelian</div>
                            <div class="job">Director & Photo Man</div>
                        </div>
                    </div>
                    <!--Testimonial 9-->
                    <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                        <p>'I have been looking for a modern and efficient banking alternative that could support the
                            development of my business. I'm just wondering why Qonto did not exist before!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Khatry Firmanio</div>
                            <div class="job">CEO Company</div>
                        </div>
                    </div>
                    <!--Testimonial 10-->
                    <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                        <p>'That's just perfect - It rocks baby! ng has finally become fun, fast and You wanna apply at
                            TheFamily? Use Qonto first.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Jadran Parvej Imon</div>
                            <div class="job">CEO Managar</div>
                        </div>
                    </div>
                    <!--Testimonial 11-->
                    <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                        <p>'I wish I could have had Qonto ng has finally become fun, fast andenrolled in the Techstars
                            Paris's first batch!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Bertier Luyt</div>
                            <div class="job">Managing Director</div>
                        </div>
                    </div>
                    <!--Testimonial 12-->
                    <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                        <p>'Thanks to a slick interface and simple ng has finally become fun, fast and features,
                            managing payments and expenses has become a piece of cake!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Darpon Abir Khan</div>
                            <div class="job">Founder Officience</div>
                        </div>
                    </div>
                </div>
                <!--Right Bubble Images-->
                <div class="container-pe-quote right">
                    <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Testimonial Area ----->
    <!--==================================================-->




    <!--==================================================-->
    <!----- Start  Contact Area ----->
    <!--==================================================-->
    <div class="main_contact_area app pt-80 bg_fixed " id="contact"
        style="background-image:url(assets/images/slider/slider14.jpg)" ;>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single_contact_abs_thumb">
                        <img src="assets/images/shape1.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title white mb-4">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>Get A Quote</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Get a Solution</h1>
                        </div>
                    </div>
                    <div class="contact_from">
                        <form id="contact_form" action="" method="POST" id="dreamit-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="fullname" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="subject" placeholder="Input printer model number">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Write a Message"></textarea>
                                    </div>
                                    <div class="quote_btn">
                                        <button class="btn" name="submit" type=" submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End  Contact Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start  Footer Middle Area ----->
    <!--==================================================-->
    <div class="footer-middle bg-dark2 pt-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <div class="footer-bottom-logo pb-40">
                            <img src="assets/images/hplogo.jpg" id="footer_logo" alt="" />
                        </div>
                        <div class="company-info-desc">
                            <p>we provide the best solution for your problems before you know it.
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text mr-3">
                                <a href="#">
                                    <p>Follow Us</p>
                                </a>
                            </div>
                            <div class="follow-company-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Useful Links</h4>
                        <div class="menu-quick-link-container ml-4">
                            <ul id="menu-quick-link" class="menu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Services</a></li>
                                <!-- <li><a href="#portfolio">Portfolio</a></li> -->
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Our Services</h4>
                        <div class="menu-quick-link-container ml-4">
                            <ul id="menu-quick-link" class="menu">
                                <li><a href="#">Drivers Downloads</a></li>
                                <li><a href="#">installation Guide</a></li>
                                <li><a href="#">Printers Setup</a></li>
                                <li><a href="#">Compatibility checking</a></li>
                                <li><a href="#">Supprort</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <h4 class="widget-title pb-4">Contact Us</h4>
                        <div class="footer-social-info">
                            <p><i class="fa fa-phone"></i>
                                <a href="tel:54786547521" style="color: #fff;">1234567890</a>
                            </p>
                        </div>
                        <div class="footer-social-info">
                            <p><i class="fa fa-envelope"></i> <a href="mailto:demo@example.com"
                                    style="color: #fff;">demo@example.com</a></p>
                        </div>
                        <div class="footer-social-info">
                            <p>
                                <i class="fa fa-map-marker"></i> Hno.23 Buddh nagar , Delhi india.
                            </p>
                        </div>


                    </div>
                </div>


            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© 2024 Printer.All Rights Reserved.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->

    <!-- jquery js -->
    <script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="venobox/venobox.js"></script>
    <!-- OnePage Nav js -->
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="assets/js/ajax-mail.js"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="assets/js/testimonial.js"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="assets/js/jquery.nivo.slider.pack.js"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script type="text/javascript" src="assets/js/theme.js"></script>
    <!-- jquery js -->
</body>



</html>

<?php
include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/ArticleDataMapper.php");

$Conn = new Connection();
$Comm = new Command();
$article_datamapper = new  ArticleDataMapper();

$results = $article_datamapper->GetArticles($Conn,$Comm);
//print_r($results);

?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codexboss.com/myars/myars/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 12:30:57 GMT -->

<head>
    <style>
        .img-responsive {
            height: auto;
            width: auto;
            max-height: 72px;
            max-width: 250px;
            vertical-align: top;
            padding-top: 0%;
        }
        
        @media screen and (max-width: 767px) {
            .side-collapse-container {
                width: 100%;
                position: relative;
                right: 0;
                transition: left .4s;
            }
            .side-collapse-container.out {
                right: 200px;
            }
            .side-collapse {
                top: 50px;
                bottom: 0;
                right: 0;
                width: 200px;
                position: fixed;
                overflow: hidden;
                transition: width .4s;
            }
            .side-collapse.in {
                width: 0;
            }
            #navBarStyle {
                margin-top: .5%;
            }
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Myars Onepage Template">
    <meta name="keywords" content="new, html, Myars, design, creative, onepage, Portfolio, personal, modern">
    <!-- Main Page Title -->
    <title>Esinam Website</title>
    <!--Fevicon-->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!--font-Google-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,800" rel="stylesheet">
    <!-- Font-awesome css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Magnific css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body data-spy="scroll" data-target=".header-area" data-offset="50" id="home">
    <!--==================================================================== 
							Start Preloader Section 
	=====================================================================-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================================== 
							End Preloader Section 
	=====================================================================-->
    <!--==================================================================== 
							Start Header Section 
	=====================================================================-->

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3" style="overflow:auto;">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/esinam.logo.png" align="left" class="img-responsive" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="main-menu">
                        <div class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a class="smoth-scroll" href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a class="smoth-scroll" href="#about">About</a>
                                    </li>
                                    <li>
                                        <a class="smoth-scroll" href="#service">Service</a>
                                    </li>
                                    <li>
                                        <a class="smoth-scroll" href="#portfolio">portfolio</a>
                                    </li>
                                    <li>
                                        <a class="smoth-scroll" href="#blog">Newsletter</a>
                                    </li>
                                    <li>
                                        <a class="smoth-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==================================================================== 
							End	Header Section 
	=====================================================================-->
    <!--==================================================================== 
							Start Slider Section 
	=====================================================================-->
    <section class="banner-area banner-2">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="slider-title">
                        <span>Modern & Sustainable</span>
                        <h1>CORPORATE EXCELLENCE</h1>
                        <p>Strategic change is profitable. We will help you get there.</p>
                        <div class="slider-btn">
                            <a class="btn1" href="#about">about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section -->
    <!--==================================================================== 
							End	Slider Section 
	=====================================================================-->
    <!--==================================================================== 
							Start About Section 
	=====================================================================-->
    <section class="about-area ptb-1" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>about us</h2>
                        <p>Our goal is to make a positive difference in South Africa by stimulating sustainable business growth & employee empowerment</p>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-img-holder">
                        <img src="assets/images/f10.jpg" alt="about-image">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-details">
                        <h3>Our Company</h3>
                        <p>Esinam is an organization development consultancy, with a passion for business analytics, change management, CSI Management and community leader couching. We are passionate about people and helping them attain a better version
                            of themselves and most importantly helping businesses create an environment that encourages that within organizational goals. </br><br>Using the most modern technology and over 13 years of multi industry experience, we endeavor
                            to save our clients time and money BUT still offer undisputed quality of service and great value for client money.</br>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section -->
    <!--==================================================================== 
							End	About Section 
	=====================================================================-->
    <!--==================================================================== 
							Start Service Section 
	=====================================================================-->
    <section class="service-area ptb-1 bg-1" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-3">
                        <h2>our service</h2>
                        <p>Service, in short, is not what you do, but who you are. It is a way of living that you need to bring to everything you do.~ Betsy Sanders</p>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-management"></i>
                        </div>
                        <h3>Diversity Management</h3>
                        <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered Ipsum available</p>
                    </div>
                </div>
                <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-life-ring "></i>
                        </div>
                        <h3> CSI Management</h3>
                        <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered Ipsum available</p>
                    </div>
                </div>
                <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <h3>Business Training & Development</h3>
                        <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered Ipsum available</p>
                    </div>
                </div>
                <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <img src="assets/images/com.png" alt="about-image" height="70" width="70">
                        </div>
                        <h3>Community Engagement ( Planning & Implementing)</h3>
                        <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered Ipsum available</p>
                    </div>
                </div>
                <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <img src="assets/images/change.jpg" alt="about-image" height="45" width="45">
                        </div>
                        <h3>Change Management</h3>
                        <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered Ipsum available</p>
                    </div>
                </div>
                <!--/End Sungle service item -->

            </div>
        </div>
    </section>
    <!--==================================================================== 
							End	Service Section 
	=====================================================================-->
    <!--==================================================================== 
							Start Facts Section 
	=====================================================================-->
    <section class="facts-area ptb-1">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="single-facts-item text-center">
                        <div class="facts-icon">
                            <i class="fa fa-thumbs-o-up"></i>
                        </div>
                        <span class="counter">300</span>
                        <h6>project done</h6>
                    </div>
                </div>
                <!-- /end single fact-item -->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="single-facts-item text-center">
                        <div class="facts-icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <span class="counter">140</span>
                        <h6>happy clients</h6>
                    </div>
                </div>
                <!-- /end single fact-item -->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="single-facts-item text-center">
                        <div class="facts-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <span class="counter">25</span>
                        <h6>award won</h6>
                    </div>
                </div>
                <!-- /end single fact-item -->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="single-facts-item text-center">
                        <div class="facts-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <span class="counter">100</span>
                        <h6>user favorite</h6>
                    </div>
                </div>
                <!-- /end single fact-item -->
            </div>
        </div>
    </section>
    <!--==================================================================== 
							End	Facts Section 
	=====================================================================-->
    <!--==================================================================== 
							Start portfolio Section 
	=====================================================================-->
    <section class="portfolio-area ptb-1" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="portfolio-menu text-center">
                        <li class="active" data-filter="*">all</li>
                        <li data-filter=".design">Rural</li>
                        <li data-filter=".development">Tonwship</li>
                        <li data-filter=".branding">Urban</li>
                    </ul>
                </div>
            </div>
            <!--/End portfolio menu-->
            <div class="row portfolio-project">
                <div class="col-md-4 col-sm-6 branding">
                    <div class="portfolio-item">
                        <a href="assets/images/chinies.jpg" class="image-popup responsive">
                            <img src="assets/images/chinies.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 branding design">
                    <div class="portfolio-item">
                        <a href="assets/images/whites.jpg" class="image-popup responsive">
                            <img src="assets/images/whites.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 branding development">
                    <div class="portfolio-item">
                        <a href="assets/images/blackman.jpg" class="image-popup responsive">
                            <img src="assets/images/blackman.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 development">
                    <div class="portfolio-item">
                        <a href="assets/images/Coloured.jpg" class="image-popup responsive">
                            <img src="assets/images/Coloured.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 development">
                    <div class="portfolio-item">
                        <a href="assets/images/f8.jpg" class="image-popup">
                            <img src="assets/images/f8.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 development">
                    <div class="portfolio-item">
                        <a href="assets/images/c3.jpg" class="image-popup">
                            <img src="assets/images/c3.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 development design">
                    <div class="portfolio-item">
                        <a href="assets/images/black3.jpg" class="image-popup">
                            <img src="assets/images/black3.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 Developer">
                    <div class="portfolio-item">
                        <a href="assets/images/f9.jpg" class="image-popup">
                            <img src="assets/images/f9.jpg" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
                <div class="col-md-4 col-sm-6 design">
                    <div class="portfolio-item">
                        <a href="assets/images/f1.png" class="image-popup">
                            <img src="assets/images/f1.png" alt="image-popup" class="responsive">
                            <div class="overlay">
                                <div class="portfolio-item-caption">
                                    <h6>web application</h6>
                                    <span>project one</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /end single portfolio item -->
            </div>
        </div>
    </section>
    <!--==================================================================== 
							End	portfolio Section 
	=====================================================================-->
    <!--==================================================================== 
                            Start User Quotes Section 
    =====================================================================-->
    <div class="user-quotes-area ptb-1">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="user-quotes text-center">
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh consectetur dolore magna aliqua</h6>
                        <p>- Mango People -</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================================== 
                            End User Quotes Section 
    =====================================================================-->
    <!--==================================================================== 
							Start team Section 
	=====================================================================-->
    <section class="team-area ptb-1 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>Our Young Minds</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh consectetur</p>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img-holder">
                            <img src="assets/images/f4.png" alt="team-member">

                        </div>
                        <div class="member-info text-center">
                            <h3>Maya</h3>
                            <h6>Founder & CEO</h6>
                        </div>
                    </div>
                </div>
                <!-- /end single team member -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img-holder">
                            <img src="assets/images/f3.jpg" alt="team-member">
                        </div>
                        <div class="member-info text-center">
                            <h3>Apon</h3>
                            <h6>web developer</h6>
                        </div>
                    </div>
                </div>
                <!-- /end single team member -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img-holder">
                            <img src="assets/images/f5.jpg" alt="team-member">
                        </div>
                        <div class="member-info text-center">
                            <h3>Maria</h3>
                            <h6>Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <!-- /end single team member -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img-holder">
                            <img src="assets/images/f6.jpg" alt="team-member">
                        </div>
                        <div class="member-info text-center">
                            <h3>Jhon</h3>
                            <h6>Graphic designer</h6>
                        </div>
                    </div>
                </div>
                <!-- /end single team member -->
            </div>
        </div>
    </section>
    <!--==================================================================== 
							End team Section 
	=====================================================================-->
    <!--==================================================================== 
							Start feature Section 
	=====================================================================-->
    <section class="feature-area ptb-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>Why With Us ?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh consectetur</p>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="feature-img">
                        <img src="assets/images/feature.jpg" alt="feature-img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="feature-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor siamet magnaelit ate consectetur</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="single-features">
                                    <h4>Boundless</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-features">
                                    <h4>cloud control</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-features">
                                    <h4>top notch security</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-features">
                                    <h4>24/7 Support</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod inciddunt ametfh</p>
                                </div>
                            </div>
                        </div>
                        <a class="btn5" href="#">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================================== 
							End feature Section 
	=====================================================================-->
    <!-- ===================================================================
							Start Testimonial Section
	=====================================================================-->
    <section class="testimonial-area ptb-1">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-2">
                        <h2 class="white">testimonial</h2>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="client-say text-center owl-carousel">
                        <div class="client-single-item">
                            <p class="white"><i class="fa fa-quote-left"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i class="fa fa-quote-right"></i></p>
                            <div class="client-img">
                                <img src="assets/images/t1.jpg" alt="client-image">
                            </div>
                            <span>Jhonson, Chairman-company</span>
                        </div>
                        <!-- End single client item -->
                        <div class="client-single-item">
                            <p class="white"><i class="fa fa-quote-left"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i class="fa fa-quote-right"></i></p>
                            <div class="client-img">
                                <img src="assets/images/t2.jpg" alt="client-image">
                            </div>
                            <span>Andrew, Ceo-company</span>
                        </div>
                        <!-- End single client item -->
                        <div class="client-single-item">
                            <p class="white"><i class="fa fa-quote-left"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i class="fa fa-quote-right"></i></p>
                            <div class="client-img">
                                <img src="assets/images/t3.jpg" alt="client-image">
                            </div>
                            <span>James, Coo-company</span>
                        </div>
                        <!-- End single client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================================================
							End Testimonial Section
	=====================================================================-->
    <!-- ===================================================================
                            Start Partner Section
    =====================================================================-->
    <section class="blog-area ptb-1 bg-1" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>latest news</h2>
                    </div>
                </div>
            </div>
            <!--/End Section Top-->
            
            <?php 

            foreach($results as $row)
            {
                echo ';
                <div class="row">
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-xs-12">
                    <div class="single-post-item">
                        <div class="blog-img">
                            <a href="blog.html" target="-blank"><img src="data:image/jpeg;base64,'.base64_encode($row->image).'"; alt="blog-image"></a>
                        </div>
                        <a href="blog.html" target="-blank">
                            <h5>'.$row->article_title.'</h5>
                        </a>
                        <p>'.$row->description.'</p>
                        <a class="read-more" href="blog.php?id='.$row->article_id.'"target="-blank">read more</a>
                    </div>
                </div>
                ';
           
            }
          
            ?>
       
    </section>
    <!-- ===================================================================
                            End Partner Section
    =====================================================================-->
    <!-- ===================================================================
							Start Contact Section
	=====================================================================-->
    <section class="contact-area ptb-1" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>contact us</h2>
                        <p>Our office Number : 047 491 3331</p>
                        <p>Our office Time: 08:00 – 16:00</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs 12">
                    <div class="contact-field-area container">
                        <form action="contact.php" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="single-contact-field">
                                        <input type="text" name="name" class="text-field" id="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="single-contact-field">
                                        <input type="email" name="email" class="text-field" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="single-contact-field">
                                        <textarea name="msg" id="msg" placeholder="Message"></textarea>
                                    </div>
                                    <input type="submit" name="submit" value="send message" id="submitButton" class="btn3" data-text="Send Message">
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===================================================================
							End Contact Section
	=====================================================================-->
    <!--==================================================================== 
							Start Footer Section 
	=====================================================================-->
    <footer class="footer-area ptb-1 bg-2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="footer-logo">
                        <a href="index.html"></a>
                        <img src="assets/images/esinam.logo.png" height="150" width="150" />
                    </div>
                    <div class="copy-right">
                        <p>Copyright &copy; by Myars 2017 | All Rights Reserved</p>
                    </div>
                    <!-- End Copyright Area -->
                </div>
            </div>
        </div>
    </footer>
    <!--=========== Scroll to top ===========-->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-double-up"></i>
    </div>
    <!--==================================================================== 
							End Footer Section 
	=====================================================================-->
    <!--====================================================================
							Include All Js File 
	 ====================================================================-->
    <!-- All Plugin -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/scripts.js"></script>
</body>

<!-- Mirrored from codexboss.com/myars/myars/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 12:30:58 GMT -->

</html>
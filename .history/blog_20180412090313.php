
<?php 

session_start();
include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/ArticleDataMapper.php");

$Conn = new Connection();
$Comm = new Command();
$article_datamapper = new  ArticleDataMapper();

if(!isset($_GET['id'])){
     
}
$pid =$_GET['id'];//get the article id
$article_id = $pid;
$_SESSION['id'] =$article_id;
$results = $article_datamapper->GetArticle($article_id,$Conn,$Comm);
$title = $results->article_title;
$description =$results->description;
$image = $results->image;
$date = $results->date;
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codexboss.com/myars/myars/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 12:30:58 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Myars Onepage Template">
    <meta name="keywords" content="new, html, Myars, design, creative, onepage, Portfolio, personal, modern">
    <!-- Main Page Title -->
	<title>Esinam</title>
    <!--Fevicon-->
    <link rel="icon" href="assets/images/esinam.logo.png" type="image/x-icon" sizes="56x56" />
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
    <style>
         .img-responsive {
            height: auto;
            width: auto;
            max-height: 72px;
            max-width: 250px;
            vertical-align: top;
            padding-top: 0%;
        }
    </style>
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
                    <div class="logo"> <!--/Start Logo Area -->
                        <a href="index.html">
                        <img src="assets/images/esinam.logo.png" align="left" class="img-responsive" />

						</a>
                    </div> <!--/End Logo Area -->
                </div>
				 <div class="col-md-9 col-sm-9">
                    <div class="main-menu"> <!-- Start Menu Area -->
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
                                    	<a class="smoth-scroll" href="index.php">Home</a>
                                    <li>
                                    	<a class="smoth-scroll" href="about.html">About</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="service.html">Service</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="portfolio.html">portfolio</a>
                                    </li>
                                    <!-- <li>
                                        <a class="smoth-scroll" href="blog.php?id='<?php echo $article_id ?>'">blog</a>
                                    </li> -->
                                    <li>
                                    	<a class="smoth-scroll" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!--/End Menu Area -->
                </div>
			</div>
		</div>
	</header> <!--/End Header Area -->
	<!--==================================================================== 
							End	Header Section 
	=====================================================================-->
	<!--====================================================================
					Start Banner Section
	=====================================================================-->
	<div class="blog-banner-area">
		<div class="container">
			<div class="row">
				<div class="com-md-12">
					<div class="breadcrumb-area text-center">
					   <ul class="breadcrumb">
						  <li><a href="index.php">home</a></li>
						  <li class="active">blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="container" >
    <h2><?php echo $title ?></h2>
    </div>
	<!--====================================================================
					End Banner Section
	=====================================================================-->

	<!--====================================================================
					Start Details Section
    =====================================================================-->
    <?php 
    
    echo ' <section class="blog-container pt-1">
    <div class="container">


                    <!-- /.Single Blog Post -->
                    <div class="col-md-6">
                        <div class="single-blog-post">
                            <div class="post-thumbnail">
                                <img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="post-thumbnail" style=">
                            </div> <!-- /.post-img -->
                            <div class="post-head">
                                <h3 class="entry-title"><a href="single-blog.html">'. $title.' </a></h3>
                                
                            </div> <!-- /.post-head -->
                            <div class="entry-content">
                                <p> '.$description.'</p>
                            </div>
                            
                        </div>
                    </div> 
                    
<div>
 <section>
    ';
   
    ?>
	
                     
	<!--====================================================================
					End Details Section
	=====================================================================-->
	<!--==================================================================== 
							Start Footer Section 
	=====================================================================-->
	<footer class="footer-area ptb-1 bg-2 text-center">	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="footer-logo">
						<a href="index.php">Esinam</a>
					</div>
					<div class="copy-right">
						<p>Copyright &copy; by Esinam 2017 | All Rights Reserved</p>
					</div> <!-- End Copyright Area -->
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
	<script src="assets/js/contact-form.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <!-- Custom JS -->
	<script src="assets/js/scripts.js"></script>
</body>

<!-- Mirrored from codexboss.com/myars/myars/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 12:31:05 GMT -->
</html>
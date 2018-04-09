<?php
session_start();
//include connection
include ("models/DAL/connection.php");

include ('models/DAL/Command.php');
include ('models/DAL/ArticleDataMapper.php');
include ('models/article.php');


$Con = new Connection();
$Comm = new Command();

$article_datamaper = new ArticleDataMapper();

if (isset($_POST['post'])){

$title =$_POST['title'];
$description = $_POST['content'];

$file =  ($_FILES['image']['tmp_name']);

$date = date("Y-m-d");
$result=$article_datamaper->SaveArticle($title,$description,$file,$date,$Con,$Comm);

//create article object
// $Article = new Article($title, $description, $file, $date);

	if ($result){

		
		header("Location: blogindex.php");
	}	

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Blog posting</title>
    <meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
	
	.img-responsive {
    height: auto;
    width: auto;
    max-height: 72px;
    max-width: 250px;
}
</style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-repeat:no-repeat;
}

.topnav {
  overflow: hidden;
  background-color:light;

}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: right;
    display: block;
    text-align: left;
  }
}
</style>
		<!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Newpost</title>
        <!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/v.js"></script>
        
        <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
		<!--readmore jquery-->
	<script src="/node_modules/readmore-js/readmore.min.js"></script>
 </head>
 <body style="background:url('assets/images/admin-login-background-images.jpg') " style="background-repeat:no-repeat;">
	 <div class="div-label-span div-margin-bottom-5px">

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

			<div class="container">
			<form action="" method="post" enctype="multipart/form-data" display:flex;>
			<h2>Please write your article</h2>

			<input placeholder="Title" name="title" type="text" autofocus size="48" class="form-control">
			<hr><br /><br />
			<div>
			<input type="file" name="image"><hr>
			</div>
			<div>
			<textarea class="ckeditor form-control" placeholder="Content" name="content" rows="20" cols="50"></textarea>
			<hr><br />
            <!--<input type="date" name="date"><label><strong> Date of article</strong></label><hr>-->
			</div>
<div>
<input name="post" type="submit" value="Post" width="50px" />
</div>
				
	</form>
	<div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</html>
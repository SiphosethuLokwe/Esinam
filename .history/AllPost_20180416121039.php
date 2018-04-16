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
            background-repeat: no-repeat;
        }
        
        .topnav {
            overflow: hidden;
            background-color: light;
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
            .topnav a:not(:first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }
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
    <!--readmore jquery-->
    <script src="/node_modules/readmore-js/readmore.min.js"></script>

    <script src="js/validation.js"></script>

    <script src="js/ValidateDelete.js"></script>

</head>

<body style="background:url('assets/images/aboutp.jpg')">
    <div class="div-label-span div-margin-bottom-5px">

        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3" style="overflow:auto;">
                        <div class="logo">
                            <a href="index.php">
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
                                                        <a class="smoth-scroll" href="index.php" onclick="LogoutConfirm(event);">Logout</a>                                       
                                                        </li>
                                                   <li>
                                                       <a class="smoth-scroll" href="AllPost.php">My Posts</a>
                                                   </li>
                                                  
                                                    <li>
                                                       <a class="smoth-scroll" href="newpost.html">Add Post</a>
                                                   </li>
                                                   <li>
                                                       <a class="smoth-scroll" href="ChangePassword.html">Change Password</a>
                                                   </li>
                                        <!-- <li>
                                            <a class="smoth-scroll" href="#blog">Newsletter</a>
                                        </li>
                                        <li>
                                            <a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>  --> 
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
        <div class="container">
            <form action="newpost.php" method="post" enctype="multipart/form-data" display:flex;>
                <h2>My Posts</h2>
                <br>
             
            <?php 
            if(!empty($results))
            {
                foreach($results as $row)
                {
                    echo '<div class="well well-lg">
                    <div class="card mb-4">
                    <img class="card-img-top img-size" src="data:image/jpeg;base64,'.base64_encode($row->image).'"; alt="Card image cap">
                    <div class="card-body">
                    <h2 class="card-title"><a href="EditPost.php?id='.$row->article_id.'">'.$row->article_title.'</a></h2>
                    <p class="card-text"> '.$row->description.'</p>
                    <a href="EditPost.html?id='.$row->article_id.' " class="btn btn-warning">Edit</a>
                    <div class="pull-right">
                    <form action="Allpost.php" method="post">
                    <a id="" href="DeletePost.php?id='.$row->article_id.'" data-id="'.$row->article_id.'" class="btn btn-danger" onclick="confirmdelete(this,event)">delete</a>
                    </form>
                    </div>
                    </div>
                    
                    <div class="card-footer text-muted">
                    Posted on '.$row->date.'
                    
                    </div>
                    </div>
                    </div>';
                }
            }
            else{
                echo"<div><h3>No Post Available</h3></div>";
            }

            ?>

            </form>
            <div>
            </div>
        </div>
    </div>
</body>

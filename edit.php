<?php
session_start();
//include connection
include ("models/DAL/connection.php");

include ('models/DAL/Command.php');
include ('models/DAL/ArticleDataMapper.php');
include ('models/article.php');

//connection, command and article data mapper obj
$Con = new Connection();
$Comm = new Command();

$article_datamaper = new ArticleDataMapper();

if(!isset($_GET['pid'])){
    header("Location: blogdetails.php");
}
$pid =$_GET['pid'];//get the article id


if (isset($_POST['update'])){

$title =$_POST['title'];
$description = $_POST['content'];

$file =  ($_FILES['image']['tmp_name']);

$date = date("Y-m-d");
$result=$article_datamaper->UpdateArticle($title,$description,$file,$date,$Con,$Comm);



//create article object
// $Article = new Article($title, $description, $file, $date);

	if ($result){

		
		header("Location: blogindex.php");
	}	

}

$Conn = new Connection();
$Comm = new Command();
$blogmapper = new ArticleDataMapper();
 $Article = $blogmapper->GetArticle($pid, $Conn,$Comm);
            //print_r($results);
            
                
                $title = $Article->title;
                $content = $Article->description;
                $image = $Article->image;
                $time = $Article->date;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Blog posting</title>
    <meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

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

		<!--readmore jquery-->
		<script src="/node_modules/readmore-js/readmore.min.js"></script>
 </head>
 <body>
	 <div class="div-label-span div-margin-bottom-5px">
            <!-- Logo -->
				<div class="logo float-left tran4s" style="background-color:#00d747;margin-top:-20px;padding:2%;">
                        <a href="index.html">
                            <img src="images/logo/logo_white.png" width="200" alt="Logo">
                        </a>
                </div>    
            <?php
            
           

			echo "<form action='' method='update' enctype='multipart/form-data' display:flex;>
			<h2>Please write your article</h2>

			<input placeholder='Title' name='title' type='text' value= '$title' autofocus size='48'>
			<hr><br /><br />
			<div>
			<input type='file' name='image' value= '' ><hr>
			</div>
			<div>
			<textarea class='ckeditor' placeholder='Content' name='content' rows='20' cols='50'> $content</textarea>
			<hr><br />
            
			</div>

			<input name='post' type='submit' value='Post' width='50px'/>
				
            </form>";
            ?>
</body>
</html>
<?php
session_start();
//include connection
include ("models/DAL/connection.php");

include ('models/DAL/Command.php');
include ('models/DAL/ArticleDataMapper.php');
include ('models/article.php');


$Con = new Connection();
$Comm = new Command();
$msg = '';
 $loginurl = 'Location: newpost.html';
$article_datamaper = new ArticleDataMapper();

if (isset($_POST['post'])){

$article_title =$_POST['title'];
$description = $_POST['content'];
$date = date("Y-m-d");
$image="";
$fileName = $_FILES['FileUpload']['tmp_name'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$path = $_FILES['FileUpload']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$allowed = array('jpg','jpeg','png','JPG','JPG','JPEG','PNG');

 if (in_array($ext,$allowed)){

	$image = file_get_contents($_FILES['FileUpload']['tmp_name']);
	$result=$article_datamaper->SaveArticle($article_title,$description,$image,$date,$Con,$Comm);

	if($result)
{
	$msg = $msg.'msg="Success';
	header($loginurl.'?'.$msg);
}
 }
 else{
	$msg = $msg.'msg="File must be a jpg,png,jpeg';
	header($loginurl.'?'.$msg);
 }
	

}

?>



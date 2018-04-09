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

$article_title =$_POST['title'];
$description = $_POST['content'];

if(isset($_FILES['fileUpload'] ))
{

	function get_file_extension($file_name)
{
	return pathinfo($file_name , PATHINFO_EXTENTION);
}

function get_file_extension1($file_name)
{
	return (explode('.', $file_name));
}

function getfilesize($file_name)
{
	return (filesize($file_name));
}
$path = $_FILES['FileUpload']['name'];
$path2 =$_FILES['FileUpload']['tmp_name'];
$tmp = explode('.', $path );
$ext = end($tmp);

$filesize = getfilesize($path2);
$image = file_get_contents($_FILES['FileUpload']['tmp_name']);
	
	//   }
}
$date = date("Y-m-d");


$result=$article_datamaper->SaveArticle($article_title,$description,$image,$date,$Con,$Comm);

//create article object
// $Article = new Article($title, $description, $file, $date);

	if ($result){

		echo"success";
	echo"".$image;
	}	

}

?>




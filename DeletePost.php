<?php
session_start();

include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/ArticleDataMapper.php");

$Conn = new Connection();
$Comm = new Command();
$article_datamapper = new  ArticleDataMapper();
if(!isset($_GET['id'])){
    header('Location:AllPost.php');
}
else{
    
       $article_id = $_GET['id'];
       $result=$article_datamapper->DeleteArticle($article_id, $Conn, $Comm);
       if($result)
       {
           header('Location:AllPost.php');
       }

    
}



?>
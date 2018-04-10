
<?php 

session_start();
include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/ArticleDataMapper.php");

$Conn = new Connection();
$Comm = new Command();
$loginurl ="EditPost.php";
$msg ="";
$article_datamapper = new  ArticleDataMapper();

 if(!isset($_SESSION['id'])){
     header("Location:EditPost.php");
}
$article_id = $_SESSION['id'];

if(isset($_POST['update'])){

    $article_title = $_POST['title'];
    $description = $_POST['content'];                          
    $date = date("Y-m-d");
    $results = $article_datamapper->GetArticle($article_id,$Conn,$Comm);

echo"".$article_id ;
echo"".  $article_title ;
echo"".$description ;
echo"". $date ;
echo"". $image = $results->image;


    $fileName = $_FILES['FileUpload']['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $path = $_FILES['FileUpload']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $allowed = array('jpg','jpeg','png','JPG','JPG','JPEG','PNG');
     if (in_array($ext,$allowed)){
    
        $image =file_get_contents($_File['FileUpload']['tmp_name']);
         if($_FILES['FileUpload']['tmp_name'] == " ")
         $image = $results->image;
        $edit_article = $article_datamapper->UpdateArticle($Conn,$Comm,$article_id,$article_title,$description,$image,$date);
        if($edit_article)
    {
        
        header('Location:AllPost.php');
    }
     }
     else{
        $msg = $msg.'msg="File must be a jpg,png,jpeg';
        header($loginurl.'?'.$msg);
     }
    
}



?>

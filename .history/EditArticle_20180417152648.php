
<?php 

session_start();


if(!isset($_SESSION['user']))
{
        header('Location:Login.php');
}

include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/ArticleDataMapper.php");

// try{
    $Conn = new Connection();
    $Comm = new Command();
    $loginurl ="EditPost.php";
    $loginurl2 ="EditArticle.php";
    $msg ="";
    $article_datamapper = new  ArticleDataMapper();
    
     if(!isset($_SESSION['id'])){
         header("Location:EditPost.php");
    }
    $article_id = $_SESSION['id'];
    
    if(isset($_POST['btnimage']))
    {
        if(isset($_FILES['FileUpload']['name'])){
            $fileName = $_FILES['FileUpload']['tmp_name'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $path = $_FILES['FileUpload']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $allowed = array('jpg','jpeg','png','JPG','JPG','JPEG','PNG');
          
            if (in_array($ext,$allowed)){
            
                $image =file_get_contents($_FILES['FileUpload']['tmp_name']);
                $Updateimage = $article_datamapper->UpdateImage($Conn,$Comm,$article_id,$image);
                if($Updateimage)
                {
                    header('Location:AllPost.php');
                }
            }
            else
            {
                $msg = 'msg="File must be a jpg,png,jpeg';
                header('Location:'.$loginurl.'?'.$msg.'&id='.$article_id);
            }
        }else{
            echo 'Error';
        }
    }
    
     if(isset($_POST['update'])){
    
        $article_title = $_POST['title'];
        $description = $_POST['content'];                          
        $date = date("Y-m-d");
        $results = $article_datamapper->GetArticle($article_id,$Conn,$Comm);
        $edit_article = $article_datamapper->UpdateArticle($Conn,$Comm,$article_id,$article_title,$description,$date);
            echo"".   $article_title;
        if($edit_article)
        {            echo"".   $article_title;

            header('Location:AllPost.php');
        }
         }
         else{
            $msg = $msg.'msg="Something Went wrong please try again after 5 minutes';
            header($loginurl.'?'.$msg);
         }
        
// }
// catch(Exception $ex){
//     echo '<script type="text/javascript">
//                           window.location = "AllPost.php"
//                      </script>';
// }
<?php
session_start();
//include connection
if(!isset($_SESSION['user'])){
	    header('Location: Login.php');
	 }
include ("models/DAL/connection.php");
include ('models/DAL/command.php');
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


if(!file_exists($_FILES['FileUpload']['tmp_name']))
	{	
		$path = 'assets/images/NDEditorblogdefault1.jpg';
		$image = file_get_contents($path);
		$result=$article_datamaper->SaveArticle($article_title,$description,$image,$date,$Con,$Comm);
        $msg = $msg.'msg="Successfully Posted';
        echo '<script type="text/javascript">
        window.location = "newpost.html"?'.$msg.'
   </script>';
		header($loginurl.'?'.$msg);
	}

	else{
		if (in_array($ext,$allowed)){

			$image = file_get_contents($_FILES['FileUpload']['tmp_name']);
			$result=$article_datamaper->SaveArticle($article_title,$description,$image,$date,$Con,$Comm);

			if($result)
        {
            $msg = $msg.'msg="Successfully Posted';
            echo '<script type="text/javascript">
            window.location = "newpost.html"?'.$msg.'
            </script>';
			header($loginurl.'?'.$msg);
        }

		}


	else{
            $msg = $msg.'msg="File must be a jpg,png,jpeg';
            echo '<script type="text/javascript">
            window.location = "newpost.html"?'.$msg.'
       </script>';
			header($loginurl.'?'.$msg);
		}


	}

    
	
}
	

?>
<?php
class Validate{
    
    public function __construct(){

    }
    public function GetArticleTitle(){
        return filter_var($_POST["title"], FILTER_SANITIZE_STRING);
    }
    public function GetDescription(){
        return filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    }
    
    public function ArticleTitleMissing(){
        try{
            $em = filter_var($_POST["title"], FILTER_SANITIZE_EMAIL);
            if($em == '' || $em == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
    public function descriptionMissing(){
        try{
            $pass = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
            if($pass == '' || $pass == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
}
?>


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

$target = "assets/images/".basename($_FILES['FileUpload']['name']);
$image =file_get_contents($_File['FileUpload']['tmp_name']);
$result=$article_datamaper->SaveArticle($article_title,$description,$image,$date,$Con,$Comm);
move_uploaded_file($_FILES['tmp_name']['name'],$target);
if($result)
{
	$msg = $msg.'msg="Success';
	header($loginurl.'?'.$msg);
}





// $file = $_FILES['FileUpload'];
// $fileName = $_FILES['FileUpload']['tmp_name'];
// $fileSize = $_FILES['FileUpload']['size'];
// $fileError =$_FILES['FileUpload']['error'];
// $fileType = $_FILES['FileUpload']['type'];
// $image = file_get_contents($fileName);
// $fileExt = explode('.', $fileName);
// $fileActualExt = strtolower(end($fileExt));
// $allowed = array('jpg','jpeg','png','JPG');

// if (in_array($fileActualExt,$allowed)){
// 	if($fileError === 0){

// 		if($fileSize < 1000000)
// 		{
// 			move_uploaded_file($fileName,$image);
// 			$result=$article_datamaper->SaveArticle($article_title,$description,$image,$date,$Con,$Comm);
// 			$msg = $msg.'msg="Success';
// 			header($loginurl.'?'.$msg);
		
           
// 		}
// 		else
// 		{
// 			$msg = $msg.'msg="your file is too big';
// 			header($loginurl.'?'.$msg);
		
// 		}

// 	}
// 	else
// 	{
// 		$msg = $msg.'msg="there was a problem uploading file';
// 		header($loginurl.'?'.$msg);
	
// 	}

// }
// else{
// 	$msg = $msg.'msg="you cannot upload file of this type';
// 		header($loginurl.'?'.$msg);
	
// }



// if(isset( isset($_FILES['fileUpload'] ))
// {

// 	function get_file_extension($file_name)
// {
// 	return pathinfo($file_name , PATHINFO_EXTENTION);
// }

// function get_file_extension1($file_name)
// {
// 	return (explode('.', $file_name));
// }

// function getfilesize($file_name)
// {
// 	return (filesize($file_name));
// }
// $path = $_FILES['FileUpload']['name'];
// $path2 =$_FILES['FileUpload']['tmp_name'];
// $tmp = explode('.', $path );
// $ext = end($tmp);

// $filesize = getfilesize($path2);
// $image = file_get_contents($_FILES['FileUpload']['tmp_name']);
	
// 	//   }
// 	}




//create article object
// $Article = new Article($title, $description, $file, $date);

	if ($result){

		echo"success";
		header("Location: newpost.php");
	}	

}

?>
<SCRIPT type="text/javascript">
    function ValidateFileUpload(even) {
        var fuData = document.getElementById('fileUpload');
        var FileUploadPath = fuData.value;

		//check if image 
		if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                event.preventDefault();


            }
//To check if user upload any file
        if (FileUploadPath == '') {
            FileUploadPath =='assets/images/esinam.logo.png';
          
        } 
            // var Extension = FileUploadPath.substring(
            //         FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image


        
    }
</SCRIPT>



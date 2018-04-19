<?php 
Session_Start();
if(!isset($_SESSION['user']))
{
        header('Location:Login.html');
}


include ('models/DAL/Connection.php');
include ('models/DAL/Command.php');
include ('models/account.php');
include ('models/DAL/AccountDataMapper.php');

$Conn = new Connection();
$Comm = new Command();
 $validate = new Validate();
$account_datamapper = new AccountDataMapper();

$msg ='';
$loginurl ='ChangePassword.html';
$username = $_SESSION['user'];
$LastUpdate = date('m.d.y');

if($_POST['ChangePassword']){

    if($validate->ConfirmMissing())
    {
        $msg = $msg.'msg=Please Confirm Password ';
    }
    if($validate->PasswordMissing()){
        $msg = ($msg != '') ? $msg.'&&ps=Password is required' 
        : $msg.'ps=Password is required';
    }
    if($msg != ''){
        header('Location:'.$loginurl.'?'.$msg);
    }
    else{

        $password=$validate->GetPassword();
        $ConfirmPassword =$validate->GetConfirmPassword();
    
        if($password != $ConfirmPassword)
        {
            $msg = $msg.'msg=Passwords do not match';
            echo '<script type="text/javascript">
            window.location = "'.$loginurl.'?'.$msg.'&id'.$article_id.'"
            </script>';
            header('Location:'.$loginurl.'?'.$msg);
    
        }
        else
        {
           $result = $account_datamapper->ChangePassword($username,$LastUpdate,$password,$Conn,$Comm);

           if($result){

            $msg = $msg.'msg=Successfully Changed Password';
            echo '<script type="text/javascript">
            window.location = "'.$loginurl.'?'.$msg.'&id'.$article_id.'"
            </script>';
            header('Location:'.$loginurl.'?'.$msg);
            
           }
   
        }
    }



}

?>

<?php 

class Validate
{
    public function __construct(){

    }
    public function GetConfirmPassword(){
        return filter_var($_POST["confirmPasword"], FILTER_SANITIZE_EMAIL);
    }
    public function GetPassword(){
        return filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    }
    
    public function ConfirmMissing(){
        try{
            $em = filter_var($_POST["confirmPasword"], FILTER_SANITIZE_EMAIL);
            if($em == '' || $em == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
    public function PasswordMissing(){
        try{
            $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
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

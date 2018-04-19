

<?php
// Inistialise Session
session_start();
?>

<?php
// Check if user is loggedin
// 
?>

<?php
// INCLUDES
include ('models/DAL/Connection.php');
include ('models/DAL/Command.php');
include ('models/account.php');
include ('models/DAL/AccountDataMapper.php');
?>

<?php
if(isset($_POST['signin'])){
$msg = '';
 $loginurl = 'Location: Login.html';
$validate = new Validate();

if($validate->UsernameMissing()){
    $msg = $msg.'msg=Username is required';
}
if($validate->PasswordMissing()){
    $msg = ($msg != '') ? $msg.'&&ps=Password is required' 
    : $msg.'ps=Password is required';
}
if($msg != ''){
    header($loginurl.'?'.$msg);
}else{
    $username = $validate->GetUsername();
    $password = $validate->GetPassword();
    $_SESSION['user'] = $username;
    try
    {
        $Conn = new Connection();
        if(isset($Conn))
        {
            echo "true";
        }
        else
        {
            echo"false";
        }
        $Comm = new Command();
        $acc_datamapper = new AccountDataMapper();
        $exist = $acc_datamapper->Exist($username,$Conn,$Comm);
        // $isConfirmed = $acc_datamapper->IsConfirmed($username, $Conn, $Comm);
        echo 'Check if user has an account';           
        
        if($exist)
        { 
           //Check if is Confirmed
           // Check if password is correct
           echo 'Has account';           
            if($acc_datamapper->PasswordMatch($username, $password, $Conn, $Comm))
            { 
                // TODO: Redirect to profile
                $_SESSION['user'] = $username;
                $_SESSION['password'] =$password;
                echo 'Signed in';
                //header('Location:AllPost.php');
            } else {
                $msg = $msg.'msg=Incorrect username or password';
                header('Location:'.$loginurl.'?'.$msg);

            }

        }
        else
        {
            // Check if is confirmed
             $msg = $msg.'msg=You do not have an account';
             header('Location:'.$loginurl.'?'.$msg);
           
         }
    
    }catch(PDOException $e){
        echo 'ERROR: '. "<br>" . $e->getMessage();
    }
}
}
else
{
    // header('Location: Login.html');
}
?>

<?php
class Validate{
    
    public function __construct(){

    }
    public function GetUsername(){
        return filter_var($_POST["username"], FILTER_SANITIZE_EMAIL);
    }
    public function GetPassword(){
        return filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    }
    
    public function UsernameMissing(){
        try{
            $em = filter_var($_POST["username"], FILTER_SANITIZE_EMAIL);
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


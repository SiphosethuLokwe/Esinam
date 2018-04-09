
<?php
class Validate{


    public function __construct(){
    }
    public function GetTitle(){
        return filter_var($_POST["jobTitle"], FILTER_SANITIZE_STRING);
    }
    public function Getdescription(){
        return filter_var($_POST["jobDescription"], FILTER_SANITIZE_STRING);
    }
    public function GetjobAppId(){
        return filter_var($_POST["jobAppId"], FILTER_SANITIZE_STRING);
    }
    public function GetvacancyId(){
        return filter_var($_POST["vacancyId"], FILTER_SANITIZE_STRING);
    }
    public function GetCustomerId(){
        return filter_var($_POST["CustomerId"], FILTER_SANITIZE_STRING);
    }
    public function Getcv(){
        return filter_var($_POST["cv"], FILTER_SANITIZE_STRING);
    }
}
    
?>
<?php
class JOB{

    // PROPERTIES
   

    var $jobAppId;
    var $vacancyId;
    var $CustomerId; 
    var $cv; 
    

    
    // CONSTRUCTORS
    
    public function __construct($jobAppId,$vacancyId,$CustomerId,$cv)
    {
        $this->jobAppId=$jobAppId;
        $this->vacancyId=$vacancyId; 
        $this->CustomerId=$CustomerId; 
        $this->cv=$cv; 
        
       
    }

    // GETTERS AND SETTERS
    public function SetjobAppId($param){
        $this->jobAppId= $param;
    }
    public function GetjobAppId(){
        return $this->jobAppId;
    }
    public function SetvacancyId($param){
        $this->vacancyId = $param;
    }
    public function GetvacancyId(){
        return $this->vacancyId;
    }
    public function SetCustomerId($param){
        $this->CustomerId = $param;
    }
    public function GetCustomerId(){
        return $this->CustomerId;
    }
    public function Setcv($param){
        $this->cv = $param;
    }
    public function Getcv(){
        return $this->cv;
    }

    
   
}
?>
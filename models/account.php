<?php
class account{

    var $user_id;
    var $LastUpdate;
    var $username;
    var $password;

    public function __construct($user_id,$LastUpdate,$username,$password)
    {
        $this->Id = $Id;
        // $this->IsConfirmed = $IsConfirmed;
        // $this->IsLocked = $IsLocked;
        // $this->AccountType = $AccountType;
        $this->LastUpdate = $LastUpdate;
        $this->username= $username;
        $this->Password = $Password;
    }
    //----------------
    public function setId($parama)
    {
        $this->user_id = $param;
    }
    public function getId()
    {
        return $this->userId;
    }
    //--------------------------
    public function setUserName($parama)
    {
        $this->username = $param;
    }
    public function getUserName()
    {
        return $this->username;
    }
    //-----------------------------
    public function setPassword($parama)
    {
        $this->password = $param;
    }
    public function getPassword()
    {
        return $this->password;
    }
    //------------------------------------
    public function setLastUpdate($parama)
    {
        $this->LastUpdate = $param;
    }
    public function getLastUpdate()
    {
        return $this->LastUpdate;
    }
}
?>
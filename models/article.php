<?php
class Article{

    // PROPERTIES
   
    var $article_title;
    var $description;
    var $image;
    var $date;

    // CONSTRUCTORS
    
    public function __construct($param_title, $param_description,$param_image, $param_date)
    {
        
        $this->article_title = $param_title;
        $this->description = $param_description;
        $this->image = $param_image;
        $this->date = $param_date;
    }

    // GETTERS AND SETTERS
    // public function SetId($param){
    //     $this->id = $param;
    // }
    // public function GetId(){
    //     return $this->id;
    // }
    
    public function SetTitle($param){
        $this->article_title = $param;
    }
    public function GetTitle(){
        return $this->article_title;
    }

    public function SetDescr($param){
        $this->description = $param;
    }
    public function GetDescr(){
        return $this->description;
    }

    public function SetImage($param){
        $this->image = $param;
    }
    public function GetImage(){
        return $this->image;
    }
    public function SetDate($param){
        $this->date = $param;
    }
    public function GetDate(){
        return $this->date;
    }
}
?>
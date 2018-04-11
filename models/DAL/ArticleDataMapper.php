<?php

class ArticleDataMapper{
    public function ArticleDataMapper(){

    }

    public function UpdateArticle($Conn,$Comm,$article_id,$article_title,$description,$date){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlUpdateArticle);
            $stmt->bindParam(4, $article_id, PDO::PARAM_INT);
            $stmt->bindParam(1, $article_title, PDO::PARAM_STR);
            $stmt->bindParam(2, $description, PDO::PARAM_STR);
            $stmt->bindParam(3, $date, PDO::PARAM_STR);
           

            $stmt->execute();
           
            return true;
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function UpdateImage($Conn,$Comm,$article_id,$image)
    {
        try{

            $stmt=$Conn->Connect()->prepare($Comm->SqlUpdateArticleimage);
            $stmt->bindParam(1,$image, PDO::PARAM_LOB);
            $stmt->bindParam(2,$article_id, PDO::PARAM_INT);
            $stmt->execute();
            return true;

        }catch(PDOException $Ex)
        {
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }

    public function SaveArticle($article_title,$description,$image,$date,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->InsertArticle);
            $stmt->bindParam(1, $article_title, PDO::PARAM_STR);
            $stmt->bindParam(2, $description, PDO::PARAM_STR);
            $stmt->bindParam(3, $image, PDO::PARAM_LOB);
            $stmt->bindParam(4, $date, PDO::PARAM_STR);
            $stmt->execute();
            $id = $Conn->lastInsertId();
            return $stmt;
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function InsertArticle($Article, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->InsertArticle);
            $stmt->bindParam(1, $Article->title, PDO::PARAM_STR);
            $stmt->bindParam(2, $Article->description, PDO::PARAM_STR);
            $stmt->bindParam(3, $Article->image, PDO::PARAM_LOB);
            $stmt->bindParam(4, $Article->date, PDO::PARAM_STR);
            $stmt->execute();
            $id = $Conn->lastInsertId();
            return $id;
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function GetArticle($article_id,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectArticleById);
            $stmt->bindValue(1, $article_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function GetArticles($Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectArticles);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
        
    }
    public function DeleteArticle($article_id, $Conn, $Comm) {
        $stmt = $Conn->Connect()->prepare($Comm->SqlDeleteArticle);
        $stmt->bindValue(1, $article_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

     // get row
     public function getRow($Conn, $query, $params = []){
        try {
            $stmt = $this->$Conn->Connect()->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function GetComment($CommId,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectCommentId);
            $stmt->bindValue(1, $ArticleId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
}

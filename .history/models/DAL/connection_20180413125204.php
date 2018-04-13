<?php
class Connection{
    var $dsn = 'mysql:host=localhost3306;dbname=esinamgs_esinam';
    public $pdo;
    public function __constructor(){
    }
    public function Connect(){
        $this->pdo = new PDO($this->dsn,'esinamgs', 'S1mbarashe');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $this->pdo;
    }
    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}
?>
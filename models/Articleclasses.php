<?php
include ("DAL/connection.php");

/*creating a function to insert data into database*/
function insert_dept($topic, $desciption, $image, $date ){
    global $dbn, $msg;
    // construct SQL insert statement
    $sql_insert = "INSERT INTO article(topic, description, image, date)
       VALUES(" . $dbn->quote($topic, $desciption, $image, $date) .")";
    
    if($dbh->exec($sql_insert) === false){
    $msg = 'Error inserting data into database.';
    return false;
    }else{
    $msg = "New article created";
    return true;
    }
   }

?>
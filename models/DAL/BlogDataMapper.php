<?php
include "models/DAL/connection.php";
$datab = new Connection();

Class ArticleEntry{

    public $title, $description, $image, $date;

    public function __construct(){


        


    }
    

    function InsertComment($table_name, $form_data)
    {
        // retrieve the keys of the array (column titles)
        $fields = array_keys($form_data);
    
        // build the query
        $sql = "INSERT INTO ".$table_name."
        (`".implode('`,`', $fields)."`)
        VALUES('".implode("','", $form_data)."')";
    
        // run and return the query result resource
        return mysql_query($sql);
    }

    public function die_r ($value){
        echo'<pre>';
        print_r($value);
        echo'</pre>';
        die();
    }

    // again where clause is left optional
function dbRowUpdate($table_name, $form_data, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return mysql_query($sql);
}


}



?>
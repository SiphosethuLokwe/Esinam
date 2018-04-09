<?php

include ('models/DAL/Connection.php');


$Conn = new Connection();


if (isset($Conn))
{
    echo"true";

}
else{
    echo"false";
}


?>
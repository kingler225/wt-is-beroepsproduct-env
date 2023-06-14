<?php
require_once("./database/db_connection.php");

function getFlights(){
    return $dbconnection->query("SELECT * FROM Vlucht");
}


?>
<?php
require_once("db_connection.php");

function getFlights(){
    global $dbconnection;
    return $dbconnection->query("SELECT * FROM Vlucht", PDO::FETCH_ASSOC);
}

function maakVluchtenLijst(){
    $vluchten = getFlights();
    $lijst = "<table>";
    foreach($vluchten as $vlucht){
        $lijst .="<tr><td>" . implode("</td><td>", $vlucht) . "</td></tr>";
      }
    $lijst .= "</table>";
    return $lijst;
    }


?> 
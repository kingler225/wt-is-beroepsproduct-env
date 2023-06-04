<?php
require_once("./db_connection.php");

$flights = $connection->query('SELECT * FROM Vlucht');

function makeFlightList($flights){
    $list = "<table>";
    foreach($flights as $flight){
          $list .="<tr><td>$flight</td></tr>";
    }
    $list .="</table>";
    return $list;
}

$flightlist = makeFlightList($flights);

print_r($flightlist);

?>
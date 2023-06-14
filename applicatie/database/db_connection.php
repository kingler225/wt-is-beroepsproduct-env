<?php

$hostname = 'database_server';
$dbname = 'GelreAirport';
$username = 'sa';
$password = 'abc123!@#';



try{
    $dbconnection = new PDO('sqlsrv:Server='. $hostname .';Database='. $dbname .';ConnectionPooling=0;TrustServerCertificate=1', $username, $password);
    $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo $e->getMessage();
    die('Sorry database error');    
}


?>
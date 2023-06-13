<?php

$hostname = 'database_server';
$dbname = 'GelreAirport';
$username = 'sa';
$password = 'abc123!@#';



try{
    $connection = new PDO('sqlsrv:Server='. $hostname .';Database='. $dbname .';ConnectionPooling=0;TrustServerCertificate=1', $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo $e->getMessage();
    die('Sorry database error');    
}

$results = $connection->query("SELECT * FROM Vlucht");
foreach($results as $result){
    print_r($result);
}

?>
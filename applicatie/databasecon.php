<?php

print_r(PDO::getAvailableDrivers());
$hostname = 'database_server';
$dbname = 'GelreAirport';
$username = 'sa';
$password = 'abc123!@#';

try {
    $dbhandler = new PDO('sqlsrv:Server='. $hostname .';Database='. $dbname .';ConnectionPooling=0;TrustServerCertificate=1', $username, $password);
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
    // die('Sorry, probleem met de database');
}
 
echo 'Rest van de pagina';
?>
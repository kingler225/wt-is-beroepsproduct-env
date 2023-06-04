<?php

$hostname = 'database_server';
$dbname = 'GelreAirport';
$username = 'sa';
$password = 'abc123!@#';

$connection = new PDO('sqlsrv:Server='. $hostname .';Database='. $dbname .';ConnectionPooling=0;TrustServerCertificate=1', $username, $password);


$passengers = $connection->query('SELECT * FROM Passagier');
print_r($passengers);
echo "hello world";

?>
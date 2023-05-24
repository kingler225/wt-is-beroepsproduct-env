<?php
$naam = 'Inger Koffijberg';

$vandaag = date_create('now');
$datum = $vandaag->format('d-F-Y');

$_GET['Voornaam']
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.
</body>
</html>

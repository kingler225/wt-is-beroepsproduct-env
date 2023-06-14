<?php
$title = "Gelre CheckIn";
$navbar = " ";
$mijnvlucht = "Mijn vlucht";
$vluchtinfo = "Vluchtinformatie";
$incheck = "Inchecken";
$inloggen = "Inloggen";
$nieuwevlucht = "Nieuwe vlucht";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> </title>
</head>
<body>
    <h1></h1>
    <div> <?= $navbar ?> </div>
    <?php include "./layout/login/logout.php" ?>
</body>
</html>
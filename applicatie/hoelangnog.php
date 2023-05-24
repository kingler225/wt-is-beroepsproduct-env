<?php
$naam = 'Inger Koffijberg';

$vandaag = date_create('now');
$datum = $vandaag->format('d-M-Y');

$sinterklaas = date_create('5-12-2023');
$aantaldagen = date_diff($vandaag, $sinterklaas);
$strAantalDagen = $aantaldagen->format('Y-m-d');
echo $strAantalDagen;

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
    Het duurt nog <?=$strAantalDagen ?> tot Sinterklaas.
</body>
</html>

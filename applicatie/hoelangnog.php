<?php
$naam = 'Inger Koffijberg';

$vandaag = date_create('now');
$datum = $vandaag->format('d-M-Y');

$sinterklaas = DateTime::createFromFormat('d/m/Y', '05/12/2023');
$aantalDagen = date_diff($vandaag, $sinterklaas);
$strAantalDagen = $aantalDagen->format('%d');
echo $strAantalDagen;

$eenTMTien = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$zesTMVijftien = [11, 12, 13, 14, 15];
$result = array_merge($eenTMTien, $zesTMVijftien);
var_dump($result);


$menu = [
    [
        'Eten' => [
            'Shoarma' => 6.95,
            'Appels' => 10.95,
            'Tabouleh' => 8.95,
            'Hamburger' => 5.50
        ]
        ],
    [
        'Drinken' => [
            'Cola' => 2.00,
            'Ayran' => 2.30,
            'Fernandes' => 2.50,
            'Bier' => 5.50
        ]
    ]
        ];

var_dump($menu);
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
    Het duurt nog <?=$strAantalDagen ?> dagen tot Sinterklaas.
</body>
</html>

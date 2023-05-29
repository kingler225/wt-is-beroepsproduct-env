<?php

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

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Menukaart</title>
</head>
<body>
    <h1>
        <?= print_r($menu[0]) ?>
    </h1>
    <h1>
        <?= echo $menu[1] ?>
    </h1>
</body>
</html>
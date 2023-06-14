<?php
require_once("tabellen.php");
include_once("./layout/main.php");

var_dump($_SERVER["PATH_INFO"]);
$tables = generateTables();

?>
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\gelre.css">

    <title>$title</title>
</head>

<body>
    <header>
        <h1>
            <a href="index.php">
                <p>Welkom bij <?=$title?></p>
            </a>
        </h1>
        <div class="title">
            <h2>Uw reis start hier</h2>
        </div>
    </header>
    <main>
        <div class="container">

            <div class="navigatie">
                <nav>
                    <div class="navitem">
                        <a href="mijnvlucht.php"><?=$mijnvlucht?></a>
                    </div>
                    <div class="navitem">
                        <a href="vluchtinfo.php"><?=$vluchtinfo?></a>
                    </div>
                    <div class="navitem">
                        <a href="inchecken.php"><?=$incheck?></a>
                    </div>
                    <div class="navitem">
                        <a href="inlog.php"><?=$inloggen?></a>
                    </div>
                    <div class="navitem">
                        <a href="vluchten.php"><?=$nieuwevlucht?></a>
                      </div>
                </nav>
            </div>
            <?=$tables?>
        </div>
        
    </main>
</body>

</html>

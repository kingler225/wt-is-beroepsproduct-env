<?php

require_once("./database/db_connection.php");

function getTables(){
    global $dbconnection;
    return $dbconnection->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES", PDO::FETCH_ASSOC);
}

function generateTables(){
    $tabellen = getTables();
    $lijst = "<table>";
    foreach($tabellen as $tabel){
        $tabelnaam = $tabel["TABLE_NAME"];
        $lijst .="<tr><td><a href=$tabelnaam>" . implode("</td><td>", $tabel) . "</a></td></tr>";
      }
    $lijst .= "</table>";
    return $lijst;
    }

    $tables = generateTables();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellen database</title>
</head>
<body>
    <h1> Tabellen database</h1>
    <?=$tables?>
    
</body>
</html> -->
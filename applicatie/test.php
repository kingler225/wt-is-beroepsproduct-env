<?php
$eenVariabele = <<<EOD
Dit is een interessant stuk tekst,
maar let vooral op de body van het
volgende stuk html."
EOD;

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-voorbeeld</title>
</head>
<body>
    <p><?=$eenVariabele?></p>
</body>
</html>
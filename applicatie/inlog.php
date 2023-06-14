<?php

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\gelre.css">
    <title>Gelre CheckIn</title>
</head>

<body>
    <header>
        <h1>
            <a href="index.php">
                <p>Welkom bij Gelre Airport</p>
            </a>
        </h1>
        <div class="title">
            <h2>Inloggen</h2>
        </div>
    </header>
    <main>
        <div class="container">
            
            <div class="navigatie">
                <nav>
                    <div class="navitem">
                        <a href="mijnvlucht.php">Mijn vlucht</a>
                    </div>
                    <div class="navitem">
                        <a href="vluchtinfo.php">Vluchtinformatie</a>
                    </div>
                    <div class="navitem">
                        <a href="inchecken.php">Inchecken</a>
                    </div>
                    <div class="navitem">
                        <a href="inlog.php">Inloggen</a>
                    </div>
                    <div class="navitem">
                        <a href="vluchten.php">Nieuwe vlucht</a>
                      </div>
                </nav>
            </div>
            <div class="inlog">
                <div class="input">
                    <form>
                        <h2>Login passagiers</h2>
                        <dl>
                            <dt>Passagiersnummer</dt>
                            <dd><input type="number" /></dd>
                            <dt>Vluchtnummer</dt>
                            <dd><input type="tekst" /></dd>
                        </dl>
                        <input type="submit" />
                        <a href="./mijnvlucht.php">na login</a>
                    </form>
                </div>
                <div class="input">
                    <form>
                        <h2>Login medewerkers</h2>
                        <dl>
                            <dt>Gebruikersnaam</dt>
                            <dd><input type="text" /></dd>
                            <dt>Wachtwoord</dt>
                            <dd><input type="password" /></dd>
                        </dl>
                        <input type="submit" />
                        <a href="./vluchtinfo.php">na login</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
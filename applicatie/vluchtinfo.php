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
      <h2>Vluchtinformatie</h2>
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
      <div class="input">
        <h2>Vlucht</h2>
        <div>
          <dl>
            <div class="inputinfo">
              <dt>Vluchtnummer</dt>
              <dd><input type="text" /></dd>
              <dt>Vertrektijd</dt>
              <dd><input type="datetime-local" /></dd>
            </div>

          </dl>
          <input type="submit" />

        </div>

      </div>

      <div class="flights">
        <div class="availableflights">
          <table>
            <tr>
              <th>
                Vluchten
              </th>
            </tr>
            <tr>
              <td>
                Vlucht k7574
              </td>
            </tr>
          </table>
        </div>
        <div class="availableflights">
          <table>
            <tr>
              <th>
                Vlucht K7574
              </th>
            </tr>
            <tr>
              <td>
                Vertrektijd
              </td>
              <td>
                10:30
              </td>
            </tr>
            <tr>
              <td>
                Gate
              </td>
              <td>
                Gate 15
              </td>
            </tr>
            <tr>
              <td>
                Bestemming
              </td>
              <td>
                Lanzarote
              </td>
            </tr>
          </table>

        </div>

      </div>

    </div>
    </div>

  </main>
</body>

</html>
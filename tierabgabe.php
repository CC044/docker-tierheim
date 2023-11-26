<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spenden</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/tierabgabe.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung">
  </head>
  <body>
    <header>
        <h1>Pfotenfreunde Trier</h1>
    </header>

    <section>
      <nav>
        <ul>
          <li><a href="index.php">Start</a></li>
          <li><a href="tiersteckbriefe.php">Tiersteckbriefe</a></li>
          <li><a href="tierabgabe.php">Tierabgabe</a></li>
          <li><a href="spenden.php">Spenden</a></li>
        </ul>
      </nav>
    </section>
    <main>
    <section id="tierabgabe">
      <h1>Formular für die Tierabgabe</h1>
      <form>
        <fieldset>
          <legend>Angaben zum Tier</legend>

          <div>
          <p>Tierart:</p>
          <select>
            <option value="Hund">Hund</option>
            <option value="Katze">Hund</option>
            <option value="Kleintiere">Kleintiere</option>
          </select>
          </div>
          <div>
          <input type="radio" id="verletzt" name="tierzustand" value="verletzung">Das Tier hat eine Verletzung
          </div>
          <div>
            <input type="radio" id="find" name="tierzustand" value="findling" checked="">Das Tier ist ein Findling
          </div>
          <div>
          <input type="radio" id="haustier" name="tierzustand" value="haustier">Das Tier ist mein Haustier
          </div>
        </fieldset>

        <fieldset>
          <legend>Adressdaten</legend>
          <label>Name:</label>
          <input type="text" name="name"> 
          <label>Vorname:</label>
          <input type="text" name="vorname">
          <label>PLZ:</label>
          <input type="text" name="plz"> 
          <label>Adresse:</label>
          <input type="text" name="adresse">
          <label>Geburtsdatum:</label>
          <input type="text" name="geb" value="TT.MM.JJJJ">
          <label>E-Mail:</label>
          <input type="text" name="mail">
        </fieldset>
        <input type="submit" name="SpendeSenden" value="Senden">
      </form>
    </section>
    </main>
    <footer>
      <p>
        <a href="impressum.html">Impressum</a>
      </p>
      <p>
        <a href="kontakte.html">Kontakte</a>
      </p>
      <p>
        <a href="sitemap.xml">Sitemap</a>
      </p>
    </footer>
  </body>
</html>
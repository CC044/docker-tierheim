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
          <label for="tierart">Tierart:</label>
          <select id="tierart">
            <option value="Hund">Hund</option>
            <option value="Katze">Hund</option>
            <option value="Kleintiere">Kleintiere</option>
          </select>
          </div>
          <div>
          <input type="radio" id="verletzt" name="tierzustand" value="verletzung"><label for="verletzt">Das Tier hat eine Verletzung</label>
          </div>
          <div>
            <input type="radio" id="find" name="tierzustand" value="findling" checked=""><label for="find">Das Tier ist ein Findling</label>
          </div>
          <div>
          <input type="radio" id="haustier" name="tierzustand" value="haustier"><label for="haustier">Das Tier ist mein Haustier</label>
          </div>
        </fieldset>

        <fieldset>
          <legend>Adressdaten</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"> 
          <label for="vorname">Vorname:</label>
          <input type="text" id="vorname" name="vorname">
          <label for="plz">PLZ:</label>
          <input type="number" id="plz" name="plz" min="10000" max="99999"> 
          <label for="adresse">Adresse:</label>
          <input type="text" id="adresse" name="adresse">
          <label for="geb">Geburtsdatum:</label>
          <input type="date" id="geb" name="geb" value="" placeholder="TT.MM.JJJJ">
          <label for="mail">E-Mail:</label>
          <input type="email" id="mail" name="mail">
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
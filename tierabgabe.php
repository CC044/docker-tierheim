<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tierabgabe | Pfotenfreunde Trier</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/tierabgabe.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung">
    <script defer src="scripts/navigation.js"></script>
    <script defer src="scripts/tierabgabe.js"></script>
  </head>
  <body>
    <?php
      include_once ("lib/headerNav.inc.php");
    ?>
    
    <main id="main">
      <!--Bild auf der l. Seite-->
    <aside>
      <img id="leftPic" src="img/tiere/hunde/hund-tierabgabe.jpg" alt="Bild eines Hundes">
    </aside>
    <section id="tierabgabe">
      <h1>Formular für die Tierabgabe</h1>
      <!--Formular für die Tierabgabe-->
      <form autocomplete="on">
        <fieldset>
          <legend>Angaben zum Tier</legend>

          <div>
          <label for="tierart">Tierart:</label>
          <select id="tierart" name="tierart" autofocus>
            <option value="Hund">Hund</option>
            <option value="Katze">Katze</option>
            <option value="Kleintiere">Kleintiere</option>
          </select>
          </div>
          <div>
          <input type="checkbox" id="verletzt" name="tierzustand" value="verletzung"><label for="verletzt">Das Tier hat eine Verletzung</label>
          </div>
          <div>
            <input type="checkbox" id="find" name="tierzustand" value="findling"><label for="find">Das Tier ist ein Findling</label>
          </div>
          <div>
          <input type="checkbox" id="haustier" name="tierzustand" value="haustier"><label for="haustier">Das Tier ist mein Haustier</label>
          </div>
        </fieldset>

        <fieldset>
          <legend>Adressdaten</legend>
          <label for="name">Nachname:</label>
          <input type="text" id="name" name="name" required autocapitalize="on" autocomplete="on" autocapitalize="on"> 
          <label for="vorname">Vorname:</label>
          <input type="text" id="vorname" name="vorname" required autocomplete="on" autocapitalize="on">
          <label for="plz">Postleitzahl:</label>
          <input type="number" id="plz" name="plz" min="10000" max="99999" required autocomplete="on"> 
          <label for="adresse">Adresse:</label>
          <input type="text" id="adresse" name="adresse" required autocomplete="on" autocapitalize="on">
          <label for="geb">Geburtsdatum:</label>
          <input type="date" id="geb" name="geb" required autocomplete="on">
          <label for="mail">E-Mail:</label>
          <input type="email" id="mail" name="mail" required autocomplete="on">
        </fieldset>
        <button type="button" id="tierabgabeSenden" class="btn" name="tierabgabeSenden" value="Tier abgeben">Tier abgeben</button>
      </form>
      <script async>
        /* Ich lagere diese Funktion noch in eine externe js-Datei aus und zeige noch ein hübsches modal an
           ~Chris */
        document.getElementById("tierabgabeSenden").addEventListener("click", async () => {
          alert("Vielen Dank für Ihre Tierabgabe!");
        });
      </script>
      </script>
    </section>
      <!--Bild auf der r. Seite-->
    <aside>
      <img src="img/tiere/katzen/katze-tierabgabe.jpg" alt="Bild einer Katze">
    </aside>
    </main>
    <?php
      include_once ("lib/footer.inc.php");
    ?>
  </body>
</html>

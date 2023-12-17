<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pfotenfreunde Trier | Tierabgabe</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/tierabgabe.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung">
    <script src="scripts/navigation.js" defer></script>
     <script defer src="scripts/tierabgabe.js"></script>
  </head>
  <body>
    <?php
      include ("lib/headerNav.inc.php");
    ?>
    
    <main>
    <aside>
      <img id="leftPic" src="img/tiere/hunde/hund-tierabgabe.jpg" alt="Bild eines Hundes">
    </aside>
    <section id="tierabgabe">
      <h1>Formular für die Tierabgabe</h1>
      <form>
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
          <input type="text" id="name" name="name" required> 
          <label for="vorname">Vorname:</label>
          <input type="text" id="vorname" name="vorname" required>
          <label for="plz">Postleitzahl:</label>
          <input type="number" id="plz" name="plz" min="10000" max="99999" required> 
          <label for="adresse">Adresse:</label>
          <input type="text" id="adresse" name="adresse" required>
          <label for="geb">Geburtsdatum:</label>
          <input type="date" id="geb" name="geb" required>
          <label for="mail">E-Mail:</label>
          <input type="email" id="mail" name="mail" required>
        </fieldset>
        <input type="submit" id="tierabgabeSenden" class="btn" name="SpendeSenden" value="Tier abgeben">
      </form>
    </section>
    <aside>
      <img src="img/tiere/katzen/katze-tierabgabe.jpg" alt="Bild einer Katze">
    </aside>
    </main>
    <?php
      include ("lib/footer.inc.php");
    ?>
  </body>
</html>

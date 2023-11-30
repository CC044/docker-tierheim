<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spenden</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/spenden.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung">
  </head>
  <body>
    <header>
      <a href="index.php">
        <img src="img/favicon.svg" alt="Logo von Pfotenfreunde Trier">
        <h1>Pfotenfreunde Trier</h1>
      </a>
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
      <!-- Spendeninformationen -->
      <section id="linkeSeite">
      <section id="infos">
        <h2 class="centerAlign">Spendeninformationen</h2>
        <p>Auf dieser Seite können Sie für die Arbeit des Tierheimes spenden. Damit finanzieren Sie unteranderem das Futter und die tierärztlichen Bahandlungen unserer Tiere. Um Ihre Spende abzugeben, können Sie entweder das Spendenformular auf dieser Seite benutzen oder direkt über die unten angegebenen Bankdaten an uns spenden.</p>
        <p><strong>Spendenkonto</strong><br>Sparkasse Trier<br>Kontonr.:<br>BLZ:<br>IBAN:<br>BIC:</p>
        <p class="centerAlign"><strong>Vielen Dank für Ihre Spende !!!</strong></p>
      </section>
      </section>
      <!-- Spendenformular -->
      <section id="spendenformular">
        <h1 class="centerAlign">Spendenformular</h1>
        <section id="formular">
        <form>
          <fieldset id="fieldBetrag">
            <legend>Betrag</legend>
            
            <label for="betragFeld">Beitrag:</label>
            <div id="betragInput">
              <input type="number" id="betragFeld" name="betrag" required min="1">
              <p>&#8364;</p>
            </div> 
          </fieldset>
          <fieldset>
            <legend>Auswahl</legend>
            <div>
              <input type="radio" id="einmal" name="zeitintervall" value="einmalig">
              <label for="einmal">einmalige Spende</label>
            </div>
            <div>
              <input type="radio" id="monat" name="zeitintervall" value="monatlich">
              <label for="monat">monatliche Spende</label>
            </div>
            <div>
              <input type="radio" id="jahr" name="zeitintervall" value="jährlich">
              <label for="jahr">jährliche Spende</label>
            </div>
          </fieldset>
        
          <fieldset>
            <legend>Bankdaten</legend>
            <div>
              <label for="iban">IBAN:</label>
              <input type="text" id="iban" name="iban" required="">
            </div>
            <div>
              <label for="institut">Kreditinstitut:</label>
              <input type="text" id="institut" name="institut" required="">
            </div>
            <div>
               <label for="bic">BIC:</label>
              <input type="text" id="bic" name="bic" required="">
            </div>           
          </fieldset>
      
          <fieldset>
            <legend>Adressdaten</legend>
            <div class="parallel">
              <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required="">
              </div>
              <div>
                <label for="vorname">Vorname:</label>
                <input type="text" id="vorname" name="vorname" required="">
              </div>
            </div>
             
            <div class="parallel">
              <div>
                <label for="plz">PLZ:</label>
                <input type="number" id="plz" name="plz" min="10000" max="99999" required>
              </div>
              <div>
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" required>
              </div>
            </div>
             
            
            <label for="geb">Geburtsdatum:</label>
            <input type="date" id="geb" name="geb" required>
            <label for="mail">E-Mail:</label>
            <input type="email" id="mail" name="mail" required>
          </fieldset>
          <!--<label for="SpendeSende">Spenden</label>-->
          <input type="submit" id="SpendeSenden" name="SpendeSenden" value="Senden">
        </form>
        </section>
      </section>
    </main>
    
    <footer>
      <p>
        <a href="impressum.html">Impressum</a>
      </p>
      <p>
        <a href="kontakte.html">Kontakte</a>
      </p>
    </footer>
  </body>
</html>

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
    <style>
      /*
      main{
        font-size: auto;
        margin: 15px;
        display: flex;
        color: black;
      }
      main h1{
        text-align: center;
      }
      #linkeSeite{
        display: flex;
        flex-direction: row;
        justify-content: center;
        border: 3px solid black;
        border-radius: 6px;
        margin-right: 5px;
        width: 60%
      }
      #infos{
        display: flex;
        flex-direction: column;
        width: 70%;
      }
      #spendenformular{
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 40%;
        border: 3px solid black;
        border-radius: 6px;
        margin-left: 5px;
        padding: 3px;
      }
      #formular{
        display: flex;
        justify-content: center;
      }
      input[type=text], input[type=submit]{
        border-radius: 4px;
      }
      input[type=text]{
        width: 100%;
      }
      form{
        width: 50%;
      }
      fieldset{
        border-radius: 4px;
        background-color: #f8f8f8;
      }
      #betrag{
        width: 90%;
        margin-right: 3px;
      }
      #fieldBetrag{
        display: flex;
      }
      .parallel{
        display: flex;
        flex-direction: row;
      }
      .parallel div{
        width: 50%;
      }
      .parallel input[type=text]{
        width: 80%
      }
      @media only screen and (max-width: 800px) {
      /* For mobile phones:
        main {
          display: flex;
          flex-direction: column;
        }
        #linkeSeite, #spendenformular{
          width: 100%;
          padding: 0;
          margin: 0;
        }
      }
      */
    </style>
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
            <div id="betrag">
              <label for="betragFeld">Beitrag</label>
              <input type="text" id="betragFeld" name="betrag">
            </div>
            <div >€</div>
          </fieldset>
          
          <fieldset>
            <legend>Auswahl</legend>
            <div>
              <input type="radio" id="einmal" name ="zeitintervall" value="einmalig">
              <label for="einmal">einmalige Spende</label>
            </div>
            <div>
              <input type="radio" id="monat" name ="zeitintervall" value="monatlich">
              <label for="monat">monatliche Spende</label>
            </div>
            <div>
              <input type="radio" id="jahr" name ="zeitintervall" value="jährlich">
              <label for="jahr">jährliche Spende</label>
            </div>
          </fieldset>
        
          <fieldset>
            <legend>Bankdaten</legend>
            <div>
              <label for="iban">IBAN:</label>
              <input type="text" id="iban" name="iban">
            </div>
            <div>
              <label for="institut">Kreditinstitut:</label>
              <input type="text" id="institut" name="institut">
            </div>
            <div>
               <label for="bic">BIC:</label>
              <input type="text" id="bic" name="bic">
            </div>           
          </fieldset>
      
          <fieldset>
            <legend>Adressdaten</legend>
            <div class="parallel">
              <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
              </div>
              <div>
                <label for="vorname">Vorname:</label>
                <input type="text" id="vorname" name="vorname">
              </div>
            </div>
             
            <div class="parallel">
              <div>
                <label for="plz">PLZ:</label>
                <input type="text" id="plz" name="plz">
              </div>
              <div>
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse">
              </div>
            </div>
             
            
            <label for="geb">Geburtsdatum:</label>
            <input type="text" id="geb" name="geb" value="TT.MM.JJJJ">
            <label for="mail">E-Mail:</label>
            <input type="text" id="mail" name="mail">
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
      <p>
        <a href="sitemap.xml">Sitemap</a>
      </p>
    </footer>
  </body>
</html>

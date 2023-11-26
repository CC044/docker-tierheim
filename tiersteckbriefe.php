<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiersteckbriefe</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/tiersteckbriefe.css" rel="stylesheet" type="text/css"/>
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung der Webseite">

    <style>
      /*body {
        background-color: black;
        color: white;
      } */
      main {
        margin: 1em;
      }
      main > ul {
        list-style: none;
      }
      
      /* Navigation */
      .menue, .untermenue {
        margin: 0;
        padding: 0;
      }
      .untermenue {
        visibility: hidden;
        height: auto;
        height: 0; /* Main Content springt */
        z-index: 10; /* ueberdeckung vermeiden*/
      }
      nav li .untermenue {
        display: block;
      }
      nav li:hover .untermenue,
      nav li:active .untermenue,
      nav li:focus .untermenue {
        visibility: visible;
        /* height: auto; */
      }
      /* Navigation Ende */

      /* DEBUG * /
      .menue > li {border: 1px solid red;}
      .untermenue {border: 1px solid gold;} /* */

      /* Tierkarten */
      /* Flex-Container */
      .cardUebersicht {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        max-width: 90%;
      }
      /* Flex-Item */
      .card {
        /* border: 2px solid red; /* DEBUG */
        margin: 3px;
        height: auto;
        /* width: 100%; */
        width: 350px;
        max-width: 100%;
      }
      .cardBild img {
        height: auto;
        width: 100%;
        max-height: 100%;
        max-width: 640px;
      }
      .cardText {}
      .cardAttribute {}
      
    </style>
  </head>
  <body>
    <header>
      <h1>Tiersteckbriefe</h1>
    </header>
    <section>
      <nav>
        <ul class="menue">
          <li><a href="index.php">Start</a></li>
          <li><a href="#">Tiersteckbriefe</a>
            <ul class="untermenue">
              <li>
                <a href="tiersteckbriefe.php?kategorie=hund">Hund</a>
              </li>
              <li>
                <a href="tiersteckbriefe.php?kategorie=katze">Katze</a>
              </li>
            </ul>
          </li>
          <li><a href="tierabgabe.php">Tierabgabe</a></li>
          <li><a href="spenden.php">Spenden</a></li>
        </ul>
      </nav>
    </section>
    <main>
      <ul class="cardUebersicht" id="cardUebersicht">
        <li>
          <section class="card">
            <div class="cardBild">
              <img src="img/tiere/hund_01.jpg" alt="Bild von Hund Bella" />
            </div>
            <aside class="cardText">
              <h2>Bella Variante 1 mit Links</h2>
              <ul class="cardAttribute">
                <li>Rasse: Schäferhund</li>
                <li>Alter: 5 Jahre</li>
                <li>Große: Mittelgroß</li>
                <li>Vorlieben: spielen</li>
                <li>Abneigungen: Leerer Napf</li>
              </ul>
              <p>Bella wurde von einer liebevollen Familie abgegeben, die sich nicht mehr um sie kümmern konnte. Sie ist bereits stubenrein, gut sozialisiert und freut sich darauf, ihr Herz zu verschenken.</p>
            </aside>
            <a href="tierAdoptieren.php?name=Bella" class="adoptieren button">Adoptieren</a>
            <a href="tierSachspende.php?name=Bella" class="sachspende button">Sachspende</a>
            <a href="tierPatenschaft.php?name=Bella" class="patenschaft button">Patenschaft</a>
          </section>
        </li>

        <li>
          <section class="card">
            <div class="cardBild">
              <img src="https://i.ytimg.com/vi/mhrvQmjKg24/maxresdefault.jpg" alt="Bild von Hund Doge" />
            </div>
            <div class="cardText">
              <h2>Doge</h2>
              <ul class="cardAttribute">
                <li>Rasse: Shiba Inu</li>
                <li>Alter: 14 Jahre</li>
                <li>Große: Klein</li>
                <li>Vorlieben: Menschen unterhalten</li>
                <li>Abneigungen: Langeweile</li>
              </ul>
              <p>Doge, der Shiba Inu-Hund, ist das Gesicht eines der bekanntesten Internet-Memes. Mit seinem markanten Gesichtsausdruck, der von Comic Sans MS begleitet wird, bringt Doge eine humorvolle Note in die Online-Welt.</p>
            </div>
            <a href="tierAdoptieren.php?name=Bella" class="adoptieren button">Adoptieren</a>
            <a href="tierSachspende.php?name=Bella" class="sachspende button">Sachspende</a>
            <a href="tierPatenschaft.php?name=Bella" class="patenschaft button">Patenschaft</a>
          </section>
        </li>

        <!-- Webseite füllen zum Testen von Umbrüchen von CSS -->
        <li><div class="card"><div class="cardBild"><img src="img/tiere/hund_01.jpg" alt="Bild von Hund Bella" /></div><div class="cardText"><h2>Name des Hundes</h2><p>Beschreibung von Hund 01</p></div><a href="tierAdoptieren.php" class="adoptieren button">Adoptieren</a><a href="tierSachspende.php" class="sachspende button">Sachspende</a><a href="tierPatenschaft.php" class="patenschaft button">Patenschaft</a></div></li>
        <li><div class="card"><div class="cardBild"><img src="img/tiere/hund_01.jpg" alt="Bild von Hund Bella" /></div><div class="cardText"><h2>Name des Hundes</h2><p>Beschreibung von Hund 01</p></div><a href="tierAdoptieren.php" class="adoptieren button">Adoptieren</a><a href="tierSachspende.php" class="sachspende button">Sachspende</a><a href="tierPatenschaft.php" class="patenschaft button">Patenschaft</a></div></li>
        <li><div class="card"><div class="cardBild"><img src="img/tiere/hund_01.jpg" alt="Bild von Hund Bella" /></div><div class="cardText"><h2>Name des Hundes</h2><p>Beschreibung von Hund 01</p></div><a href="tierAdoptieren.php" class="adoptieren button">Adoptieren</a><a href="tierSachspende.php" class="sachspende button">Sachspende</a><a href="tierPatenschaft.php" class="patenschaft button">Patenschaft</a></div></li>
        <li><div class="card"><div class="cardBild"><img src="img/tiere/hund_01.jpg" alt="Bild von Hund Bella" /></div><div class="cardText"><h2>Name des Hundes</h2><p>Beschreibung von Hund 01</p></div><a href="tierAdoptieren.php" class="adoptieren button">Adoptieren</a><a href="tierSachspende.php" class="sachspende button">Sachspende</a><a href="tierPatenschaft.php" class="patenschaft button">Patenschaft</a></div></li>

        
      </ul>
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

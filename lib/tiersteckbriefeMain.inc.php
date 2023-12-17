<?php
  // include ("lib/eingabenBereinigen.php"); // Bereits in nav und header
  // include ("lib/getCards.php");
  $hunde = "
    <main>
    <ul class=\"cardUebersicht\" id=\"cardUebersicht\">
      <li>
        <section class=\"card\">
          <div class=\"cardBild\">
            <img src=\"img/tiere/hund_01.jpg\" alt=\"Bild von Hund Bella\" >
          </div>
          <aside class=\"cardText\">
            <h2>Bella</h2>
            <ul class=\"cardAttribute\">
              <li>Rasse: Schäferhund</li>
              <li>Alter: 5 Jahre</li>
              <li>Große: Mittelgroß</li>
              <li>Vorlieben: spielen</li>
              <li>Abneigungen: Leerer Napf</li>
            </ul>
            <p>Bella wurde von einer liebevollen Familie abgegeben, die sich nicht mehr um sie kümmern konnte. Sie ist bereits stubenrein, gut sozialisiert und freut sich darauf, ihr Herz zu verschenken.</p>
          </aside>
          <a href=\"tierAdoptieren.php?name=Bella\" class=\"adoptieren button\">Adoptieren</a>
          <a href=\"tierSachspende.php?name=Bella\" class=\"sachspende button\">Sachspende</a>
          <a href=\"tierPatenschaft.php?name=Bella\" class=\"patenschaft button\">Patenschaft</a>
        </section>
      </li>

      <li>
        <section class=\"card\">
          <div class=\"cardBild\">
            <img src=\"https://i.ytimg.com/vi/mhrvQmjKg24/maxresdefault.jpg\" alt=\"Bild von Hund Doge\" >
          </div>
          <div class=\"cardText\">
            <h2>Doge</h2>
            <ul class=\"cardAttribute\">
              <li>Rasse: Shiba Inu</li>
              <li>Alter: 14 Jahre</li>
              <li>Große: Klein</li>
              <li>Vorlieben: Menschen unterhalten</li>
              <li>Abneigungen: Langeweile</li>
            </ul>
            <p>Doge, der Shiba Inu-Hund, ist das Gesicht eines der bekanntesten Internet-Memes. Mit seinem markanten Gesichtsausdruck, der von Comic Sans MS begleitet wird, bringt Doge eine humorvolle Note in die Online-Welt.</p>
          </div>
          <a href=\"tierAdoptieren.php?name=Doge\" class=\"adoptieren button\">Adoptieren</a>
          <a href=\"tierSachspende.php?name=Doge\" class=\"sachspende button\">Sachspende</a>
          <a href=\"tierPatenschaft.php?name=Doge\" class=\"patenschaft button\">Patenschaft</a>
        </section>
      </li>
      <li>
        <section class=\"card\">
          <div class=\"cardBild\">
            <img src=\"img/tiere/hunde/pexels-anna-shvets-4587979.jpg\" alt=\"Bild von Hund Bello\" >
          </div>
          <div class=\"cardText\">
            <h2>Bello</h2>
            <ul class=\"cardAttribute\">
              <li>Rasse: Schäferhund</li>
              <li>Alter: 5 Jahre</li>
              <li>Große: Mittelgroß</li>
              <li>Vorlieben: spielen</li>
              <li>Abneigungen: Leerer Napf</li>
            </ul>
            <p>Bella wurde von einer liebevollen Familie abgegeben, die sich nicht mehr um sie kümmern konnte. Sie ist bereits stubenrein, gut sozialisiert und freut sich darauf, ihr Herz zu verschenken.</p>
          </div>
          <a href=\"tierAdoptieren.php?name=Bello\" class=\"adoptieren button\">Adoptieren</a>
          <a href=\"tierSachspende.php?name=Bello\" class=\"sachspende button\">Sachspende</a>
          <a href=\"tierPatenschaft.php?name=Bello\" class=\"patenschaft button\">Patenschaft</a>
        </section>
      </li>
      <li>
        <section class=\"card\">
          <div class=\"cardBild\">
            <img src=\"img/tiere/hunde/pexels-antonio-florentini-803766.jpg\" alt=\"Bild von Hund Vasko\" >
          </div>
          <div class=\"cardText\">
            <h2>Vasko</h2>
            <ul class=\"cardAttribute\">
              <li>Rasse: Schäferhund</li>
              <li>Alter: 5 Jahre</li>
              <li>Große: Mittelgroß</li>
              <li>Vorlieben: spielen</li>
              <li>Abneigungen: Leerer Napf</li>
            </ul>
            <p>Bella wurde von einer liebevollen Familie abgegeben, die sich nicht mehr um sie kümmern konnte. Sie ist bereits stubenrein, gut sozialisiert und freut sich darauf, ihr Herz zu verschenken.</p>
          </div>
          <a href=\"tierAdoptieren.php?name=Vasko\" class=\"adoptieren button\">Adoptieren</a>
          <a href=\"tierSachspende.php?name=Vasko\" class=\"sachspende button\">Sachspende</a>
          <a href=\"tierPatenschaft.php?name=Vasko\" class=\"patenschaft button\">Patenschaft</a>
        </section>
      </li>
      <li>
        <section class=\"card\">
          <div class=\"cardBild\">
            <img src=\"img/tiere/hunde/pexels-charles-1851164.jpg\" alt=\"Bild von Hund Cora\" >
          </div>
          <div class=\"cardText\">
            <h2>Cora</h2>
            <ul class=\"cardAttribute\">
              <li>Rasse: Schäferhund</li>
              <li>Alter: 5 Jahre</li>
              <li>Große: Mittelgroß</li>
              <li>Vorlieben: spielen</li>
              <li>Abneigungen: Leerer Napf</li>
            </ul>
            <p>Bella wurde von einer liebevollen Familie abgegeben, die sich nicht mehr um sie kümmern konnte. Sie ist bereits stubenrein, gut sozialisiert und freut sich darauf, ihr Herz zu verschenken.</p>
          </div>
          <a href=\"tierAdoptieren.php?name=Cora\" class=\"adoptieren button\">Adoptieren</a>
          <a href=\"tierSachspende.php?name=Cora\" class=\"sachspende button\">Sachspende</a>
          <a href=\"tierPatenschaft.php?name=Cora\" class=\"patenschaft button\">Patenschaft</a>
        </section>
      </li>
    </ul>
  </main>
  ";

  include ("lib/nowdocTest.php");

echo "<main>";
echo '<ul class="cardUebersicht" id="cardUebersicht">';
  try {
    if (isset($_GET['kategorie'])) {
      $kategorie = bereinigeEingabe($_GET['kategorie']);
      
      switch ($kategorie) {
        case 'hunde':
          // echo $hunde;
          printCards(7, $kategorie, $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen);
          break;
        case 'katzen':
          echo $katzen;
          break;
        case 'kleintiere':
          echo $kleintiere;
          break;
        default:
          throw new Exception("Get-Parameter \"Kategorie\" unbekannt");
          break;
      }
    } else {
      throw new Exception("Get-Parameter \"Kategorie\" fehlt");
    }
  } catch (Exception $e) {
  echo "Fehler: " . $e->getMessage();
  }

  echo "</ul>";
  echo "</main>";
?>

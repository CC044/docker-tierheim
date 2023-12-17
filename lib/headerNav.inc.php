<?php
  include ("lib/eingabenBereinigen.php");
  
  // Header und Navigationsleiste
  echo <<<HTML
    <header>
      <a href="index.php">
        <img src="img/favicon.svg" alt="Logo von Pfotenfreunde Trier">
        <h1>Pfotenfreunde Trier</h1>
      </a>
    </header>
    <nav>
      <ul class="topmenu">
        <li id="index.php"><a href="index.php">Startseite</a></li>
        <li id="tiersteckbriefe.php"><a href="#">Tiersteckbriefe…</a>
          <button id="tiersteckSubBtn"><label id="labelSub" for="tiersteckSubBtn">⮟</label></button>
          <!-- https://www.w3schools.com/charsets/ref_utf_arrows.asp -->
          <ul id="submenu" class="submenu" aria-expanded="false">
            <li><a href="tiersteckbriefe.php?kategorie=hunde">Hunde</a></li>
            <li><a href="tiersteckbriefe.php?kategorie=katzen">Katzen</a></li>
            <li><a href="tiersteckbriefe.php?kategorie=kleintiere">Kleintiere</a></li>
          </ul>
        </li>
        <li id="tierabgabe.php"><a href="tierabgabe.php">Tierabgabe</a></li>
        <li id="spenden.php"><a href="spenden.php">Spenden</a></li>
        <li id="mitarbeiter.php"><a href="mitarbeiter.php">Mitarbeiter</a></li>
      </ul>
    </nav>
  HTML;
  
  // Breadcrumbs //
  $pageURI = $_SERVER['REQUEST_URI'];
  $pageName = pathinfo($pageURI, PATHINFO_FILENAME);
  
  // parameter pruefen
  if (!empty($_GET)) {
      switch (true) {
          case isset($_GET['kategorie']):
              $kategorie = bereinigeEingabe($_GET['kategorie']);
              echo "<div class=\"breadcrumb\"><a href=\"/index.php\">Start</a> ⮞ Tiersteckbriefe ⮞ " . ucfirst($kategorie) . "</div>";
              break;
          case isset($_GET['weitere_parameter']):
              break;
          default:
              // Hier unbekannte Parameter abfangen
              break;
      }
  } else {
      // Keine GET parameter vorhanden
      switch ($pageName) {
          // Ausblenden auf der Startseite
          case "index":
          case "":
              return;
          default:
              echo "<div class=\"breadcrumb\"><a href=\"/index.php\">Start</a> ⮞ " . ucfirst($pageName) . "</div>";
              break;
      }
  }
  
?>

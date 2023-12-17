<?php

$tierBild = 'hunde/pexels-anna-shvets-4587979.jpg';
$tierName = 'Doge';
$tierRasse = 'Shiba Inu';
//$tierAlter = '5 Jahre';
$tierGroesse = 'Mittelgroß';
//$tierVorliebe = 'spielen';
//$tierAbneigung = 'Leerer Napf';
$tierBeschreibung = 'Doge, der Shiba Inu-Hund';

$tierNamen = array('Bello', 'Vasko', 'Cora', 'Bella', 'Keno', 'Kira', 'Luna', 'Kiki', 'Freya', 'Nero');

$tierGroessen = array('Klein', 'Mittel', 'Groß');

$tierVorlieben = array('Auto fahren', 'Schlafen', 'Kuscheln', 'Spazieren', 'Rennen', 'Verstecken', 'Schnüffeln', 'Schwimmen', 'Ball holen');

$tierAbneigungen = array('Leerer Napf', 'Einsamkeit', 'Baden', 'Hundeleinen', 'Lärm', 'Laute Musik', 'Regenschirme', 'Staubsauger', 'Schokolade');



// getAttributes: Input > Randomize & Short-Array > String
function getAttributes($longArr, $maxAnzahl = 1) {
  $maxAttr = min($maxAnzahl, count($longArr) - 1);
  $randAnzahl = mt_rand(1, $maxAttr);
  $chosenAttr = array_rand($longArr, $randAnzahl); // indizes, kein Array!
  
  // einzelner String oder Array ausgeben
  if (is_array($chosenAttr)) {
      foreach ($chosenAttr as $index) {
          $shortArrResult[] = $longArr[$index];
      }
      $result = implode(' ', $shortArrResult);
  } else {
    $result = $longArr[$chosenAttr];
  }
  return $result;
}

function getImages($tierArt = 'hunde') {
  try {
    if (!$tierArt) {
      throw new Exception("Tierkategorie fehlt");
      $bildVerzeichnis = 'img/tiere/hunde/'; // Standard Tier
    } else {
      $bildVerzeichnis = 'img/tiere/' . $tierArt . "/";
    }
    if (!is_dir($bildVerzeichnis)) {
        echo "<br>\$bildVerzeichnis ist fehlerhaft: ";
        var_dump($bildVerzeichnis);
        throw new Exception("Fehlerhaftes Verzeichnis oder Pfad");
    }
    $bildDateien = scandir($bildVerzeichnis);
    if ($bildDateien === false) {
      echo "<br>\$bildVerzeichnis ist fehlerhaft: ";
      var_dump($bildVerzeichnis);
      throw new Exception("Fehler beim Lesen des Bilderverzeichnisses");
    }

    // Entferne . und .. (aktuelles Verz und oberes Verz)
    $bilder = array_slice($bildDateien, 2);
    /* zufälliges Bild auswaehlen
    // $bild = $bildDateienShort[array_rand($bildDateienShort)]; */

    return $bilder;

  } catch (Exception $e) {
    echo "Fehler: " . $e->getMessage();
  }
}

function getSingleImage($tierArt = 'hunde') {
  $bilderDateiNamen = getImages($tierArt);
  $bild = $bilderDateiNamen[array_rand($bilderDateiNamen)];

  return $bild;
}

// printCards(7, $_GET['kategorie'], $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen);

function printCards ($anzahlCards, $tierArt, $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen) {
  for ($i=0; $i < $anzahlCards; $i++) {
    $tierName = getAttributes($tierNamen, 1);
    $tierBild = getSingleImage('hunde');
    // $tierRasse = getAttributes($tierRassen);
    $tierAlter = rand(6, 12);
    $tierGroesse = getAttributes($tierGroessen, 1);
    $tierVorliebe = getAttributes($tierVorlieben, 3);
    $tierAbneigung = getAttributes($tierAbneigungen, 3);
    $tierBeschreibung = 'Beschreibung von ' . $tierName;

    $vorlage = <<<HTML
    <li>
      <section class="card">
        <div class="cardBild">
          <img src="../img/tiere/$tierArt/$tierBild" alt="Bild von $tierName" >
        </div>
        <div class="cardText">
          <h2>$tierName</h2>
          <ul class="cardAttribute">
            <li>Alter: $tierAlter Jahre</li>
            <li>Größe: $tierGroesse</li>
            <li>Vorlieben: $tierVorliebe</li>
            <li>Abneigungen: $tierAbneigung</li>
          </ul>
          <p>$tierBeschreibung</p>
        </div>
        <a href="tierUnterstuetzen.php?name=$tierName&spendeAktion=adoptieren" class="adoptieren btn">Adoptieren</a>
        <a href="tierUnterstuetzen.php?name=$tierName&spendeAktion=sachspende" class="sachspende btn">Sachspende</a>
        <a href="tierUnterstuetzen.php?name=$tierName&spendeAktion=patenschaft" class="patenschaft btn">Patenschaft</a>
      </section>
    </li>
    HTML;
    
    echo $vorlage;
  }
}
?>

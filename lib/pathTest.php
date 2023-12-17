<?php
  // $src = $_GET['src'];
  $src = "../img/tiere/hunde/pexels-anna-shvets-4587979.jpg";
  $alt = "Hier wird ein Bild gezeigt.";

  echo <<<HTML
  <style>
    body {
      background-color: #000;
      color: #fff;
    }
    img {
      color: #fff;
      height: auto;
      width: 15em;
    }
  </style>
  <body>
    <img src="$src" alt="$alt" />
    <p>Dateiliste:<br />
  HTML;

  $bildVerzeichnis = '../img/tiere/hunde/';
  $bildDateien = scandir($bildVerzeichnis);

  if (!is_dir($bildVerzeichnis) || !($bildDateien = scandir($bildVerzeichnis))) {
      die("Fehler beim Lesen von Bildern");
  }

  foreach ($bildDateien as $datei) {
      $dateipfad = "$bildVerzeichnis/$datei";
      if (is_file($dateipfad)) {
          echo "$datei<br>";
      }
  }

  echo "</p></body>";
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spendenstatus | Pfotenfreunde Trier</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/spendeVerarbeiten.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="/img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung der Webseite">
    <script defer src="/scripts/navigation.js"></script>
  </head>
  <body>
    <?php
      include_once ("headerNav.inc.php");
    ?>

    <main id="main">

  <?php

  $vorname = $nachname = $betrag = $zeitintervall = $iban = '';

  //Formulareingaben bereinigen
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $vorname = htmlspecialchars($_POST["vorname"]);
    $nachname = htmlspecialchars($_POST["nachname"]);
    $betrag = htmlspecialchars($_POST["betrag"]);
    
    switch ($_POST["zeitintervall"]) {
      case "einmalig": $zeitintervall = "einmalige Spende";
      break;
      case "monatlich": $zeitintervall = "monatliche Spende";
      break;
      case "jährliche": $zeitintervall = "monatliche Spende";
      break;
    }

    $iban = htmlspecialchars($_POST["iban"]);

    $kreditinstitut = htmlspecialchars($_POST["institut"]);    
  }

  //Spendenbenachrichtigung
  echo "<h1>Spenden erfolgreich abgeschickt!</h1>";

  $Spendeninfo = "<p>"."Liebe/r $vorname $nachname,"."<br>"."vielen Dank für deine $zeitintervall. Es wurden $betrag € von deinem Konto bei der $kreditinstitut abgebucht."."</p>";

  echo $Spendeninfo;

  //bisherige Spender 
  $filename = "topSpender.txt";
  $file = fopen($filename, "a");
  $file_content = $vorname." ".$nachname." ". $betrag."\n";
  
  if($file){
    fwrite($file, $file_content);
  } else {
    echo "Error: File not open";
  }

  fclose($file);

  //auslesen der Top-Spender
  $fileRead = fopen($filename, "r");
  $topDonator = array();

  if($fileRead){
    while(!feof($fileRead)){
      $line = fgets($fileRead);
      if(strlen($line) != 0){
        $currentDonator = explode(" ", $line);
        $topBetrag = 0;

        // Überprüfung ob der Spender schon vorhanden ist
        if(array_key_exists($currentDonator[0] . " " . $currentDonator[1], $topDonator)){
          $topBetrag = $topDonator[$currentDonator[0] . " " . $currentDonator[1]];
        }          

        // Überprüfung ob der der aktuelle Betrag der höchste der bereits vorhandenen ist
        if($topBetrag < $currentDonator[count($currentDonator)-1]){
          $topBetrag = $currentDonator[count($currentDonator)-1];
        }
        
        $topDonator[$currentDonator[0] . " " . $currentDonator[1]] = $topBetrag;
      } 
    }
  } else {
    echo "Error: File not open";
  }

  fclose($fileRead);

  arsort($topDonator);

  echo '<h1>Top Spender</h1>';

  foreach($topDonator as $key => $value){
      if(strlen($key) != 0){
        echo "Name: " . $key . ", Betrag: " . $value . "€<br>";
      }
  }
  
  echo '<br>
        <a class="btn" href="/spenden.php">Zurück zur Spendenseite</a>';
  ?>

    </main>
    <?php
      include_once ("footer.inc.php");
    ?>
  </body>
</html>

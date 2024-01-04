<?php
  // currentPageUrl wird für die Validatoren verwendet
  $reqURI = htmlspecialchars($_SERVER["REQUEST_URI"]);
  $currentPageUrl = "https://" . $_SERVER["HTTP_HOST"] . $reqURI;
  // echo "URI lautet: " . $currentPageUrl;

  $currentPageUrl = urlencode($currentPageUrl);
  if ($reqURI === "/mitarbeiter.php") {
    $freepikLink = "<p><a href=\"https://www.freepik.com\" target=\"_blank\" rel=\"noopener\">www.freepik.com</a></p>";
  } else {
    $freepikLink = "";
  }

  echo <<<HTML
    <footer>
      <p><a href="impressum.html">Impressum</a></p>
      <p><a href="kontakt.php">Kontakt</a></p>
      <p><a href="https://validator.w3.org/nu/?doc=$currentPageUrl" target="_blank" rel="noopener"><img src="https://www.w3.org/Icons/valid-html401-blue" alt="HTML validieren"></a></p>
      <p><a href="https://jigsaw.w3.org/css-validator/validator?uri=$currentPageUrl" target="_blank" rel="noopener"><img src="https://www.w3.org/Icons/valid-css-blue" alt="CSS validieren"></a></p>
      <p><a href="https://wave.webaim.org/report#/$currentPageUrl" target="_blank" rel="noopener"><img src="https://wave.webaim.org/img/wavelogo.svg" class="wavebtn" alt="Barrierefreiheit validieren"></a></p>
      $freepikLink
      <!--<p><a href="" target="_blank" rel="noopener">WeitererEintrag</a></p>-->
    </footer>
  HTML;
?>

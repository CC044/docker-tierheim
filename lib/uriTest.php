<?php
  $pageURI = $_SERVER['REQUEST_URI'];
  $pageName = pathinfo($pageURI, PATHINFO_FILENAME);
  echo "<a href=\"/index.php\">Start</a> ⮞ " . $pageName;
?>

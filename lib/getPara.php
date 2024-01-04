<!doctype html>
<html lang="de">
  <body style="background-color: #000; color: #fff;">
    <?php
      $test = $_GET['parameter'];
      $test = @htmlspecialchars($test);
      var_dump($test);
      
      echo "<br><br>Test ist: ...<br>";
      switch ($test) {
        case 'True':
        case '': // Parameter fehlt
          echo '1: LeererString';
          break;
        case NULL: // Parameter fehlt
          echo '2: Echtes NULL';
          break;
        case 'NULL': // Parameter "NULL"
          echo '3 Null-String';
          break;
        case 'Undefined':
          echo '4: String Undefined';
          break;
        echo '6: String True';
          break;
        case 'true': // Parameter "true"
          echo '5: String true';
          break;
        case true: // Parameter "true"
          echo '7: Bool true';
          break;
        default:
          echo 'Fall unbekannt.';
          break;
      }
    ?>
  </body>
</html>

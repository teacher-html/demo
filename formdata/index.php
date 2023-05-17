<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <title>Formulardaten</title>
</head>
<body>
  <table>
<?php
/**
 * demo script that shows the form-data the client sent
 */

  $method = $_SERVER['REQUEST_METHOD'];
  echo "<tr><td colspan='2'>HTTP-Methode:</td><td>$method</td>";
  if ($method == 'POST' || $method == 'PUT') {
      echo "<tr><td colspan='3'>Eingabefelder:</td>";
      foreach($_POST as $key => $value) {
          echo "<tr><td>&nbsp;</td><td>$key</td><td>=</td><td>$value</td></tr>";
      }
  }
?>
    </table>
  </body>
</html>
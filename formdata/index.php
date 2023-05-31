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
        foreach ($_POST as $key => $value) {
            if ($value)
                showValue($key, $value);
        }
    }

    function showValue($key, $value)
    {
        if (is_array($value)) {
            foreach ($value as $id => $item) {
                $part_key = $key . "[" . $id . "]";
                showValue($part_key, $item);
            }
        } else {
            echo "<tr><td>&nbsp;</td><td>$key</td><td>=</td><td>$value</td></tr>";
        }
    }

    ?>
</table>
</body>
</html>
<?php
    $valor1 = intval($_POST['val1'] ?? 0);
    $valor2 = intval($_POST['val2'] ?? 0);

    if ($valor1 > $valor2) {
        $temp = $valor1;
        $valor1 = $valor2;
        $valor2 = $temp;
    }

    if ($valor1 == $valor2) {
        echo "<p>Números iguais: " . $valor1 . "</p>";
    } else {
        echo "<p>" . $valor1 . " " . $valor2 . "</p>";
    }
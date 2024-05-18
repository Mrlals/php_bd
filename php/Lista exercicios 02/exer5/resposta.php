<?php
    $valor = $_POST['valor'];
    $fatorial = 1;

    for ($i = $valor; $i > 1; $i--) {
        $fatorial *= $i;
    }

    echo "<p>O fatorial de " . $valor . " é: " . $fatorial . "</p>";
?>
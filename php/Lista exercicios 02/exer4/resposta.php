<?php
    $valor = $_POST['valor'];

    echo "<p> Tabuada!!! do " .$valor."</p>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $valor * $i;
        echo "<p>" . $valor . " x " .$i. " = ".$resultado."</p>"; 
    }
<?php
    $valor1 = floatval($_POST['valor1']);
    $valor2 = floatval($_POST['valor2']);
    $valor3 = floatval($_POST['valor3']);
    $valor4 = floatval($_POST['valor4']);
    $valor5 = floatval($_POST['valor5']);
    $valor6 = floatval($_POST['valor6']);
    $valor7 = floatval($_POST['valor7']);

    $numeros = [$valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7];

    $menorValor = $numeros[0];
    $posicaoMenor = 0;

    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] < $menorValor) {
            $menorValor = $numeros[$i];
            $posicaoMenor = $i;
        }
    }

    echo "<p>O menor valor é: " . $menorValor . "</p>";
    echo "<p>A posição do menor valor é: " . ($posicaoMenor + 1) . "</p>";
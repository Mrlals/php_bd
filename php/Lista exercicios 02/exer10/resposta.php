<?php
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    // Calculo do IMC
    $imc = $peso / ($altura * $altura);

    $classificacao = "";
    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }

    echo "<h1>Seu IMC é: " . number_format($imc, 2, '.', '') . "</h1>";
    echo "<h2>Classificação: " . $classificacao . "</h2>";
    echo '<p>Para mais informações sobre o IMC e suas classificações, <a href="https://www.saude.gov.br/saude-de-a-z/indice-de-massa-corporal-imc">clique aqui</a>.</p>';
    ?>
<?php
    $anoNascimento = $_POST['ano'];

    define('ANO_ATUAL', date('Y'));

    $idade = ANO_ATUAL - $anoNascimento;

    $diasVividos = $idade * 365; // Assumindo que um ano tem 365 dias

    $idade2025 = 2025 - $anoNascimento;

    echo "<h2>Idade: " . $idade . " anos</h2>";
    echo "<h2>Dias vividos: " . $diasVividos . " dias</h2>";
    echo "<h2>Idade em 2025: " . $idade2025 . " anos</h2>";
    ?>
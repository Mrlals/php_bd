<?php
    $metragem = $_POST['valor'];

    $litrosTinta = $metragem / 3;
    $latasTinta = ceil($litrosTinta / 18);
    $precoTotal = $latasTinta * 80;

    echo "<h2>Quantidade de latas de tinta necessárias: " . $latasTinta . "</h2>";
    echo "<h2>Preço total: R$ " . number_format($precoTotal, 2, ',', '.') . "</h2>";
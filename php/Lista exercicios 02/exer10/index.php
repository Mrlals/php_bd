<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="resposta.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.01" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>

        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>

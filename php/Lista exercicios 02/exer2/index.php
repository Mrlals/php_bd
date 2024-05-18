<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    Hoje é dia <?php echo date("d/m/Y"); ?>
    <form action="resposta.php" method="post">
        <label>Informe o valor 1:</label>
        <input type="text" name="valor1" >
        <label>Informe o valor 2:</label>
        <input type="text" name="valor2" >
        <label>Informe o valor 3:</label>
        <input type="text" name="valor3" >
        <label>Informe o valor 4:</label>
        <input type="text" name="valor4" >
        <label>Informe o valor 5:</label>
        <input type="text" name="valor5" >
        <label>Informe o valor 6:</label>
        <input type="text" name="valor6" >
        <label>Informe o valor 7:</label>
        <input type="text" name="valor7" >
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
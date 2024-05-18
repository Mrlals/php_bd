<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist">

</head>
<body>
    <?php
        require_once "nav.html";
        require_once "funcoes.php";
        exibirData();
    ?>
    <main class = "container">
        <form action = "resposta.php" metodo="post">
            <div class ="col">
                <label for="valor1" class = "form-label">informe o valor 1: </label>
                <input type = "number" class = "form-control" name = "valor1" id ="valor1">
            </div>
            <div class ="row">
                <button type="submit" class="btn btn-danger">
                    Enviar
                </button>
            </div>
        </form>

    </main>
    <h1>
        Hello World !!!
    </h1>
    
</body>
</html>
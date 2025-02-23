<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento!</h1>
    </header>
        <?php 
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p> É um prazer te conhecer, <strong> $nome $sobrenome </strong>! esse é meu site! <p>";

        ?>
        <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
</body>
</html>
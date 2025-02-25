<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $num=$_GET["numero"];
        $texto=$_GET["nome"];
        echo ("<p>o número escolhido foi: \n". ($num));
        echo ( "<p> e seu nome é:  " . ($texto));
        ?> 
        <p> <a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
       
    </main>
    
</body>
</html>
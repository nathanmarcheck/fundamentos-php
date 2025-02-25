<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $cotacao=6;
        $real=$_REQUEST["numero"];
        $dolar=$real/$cotacao;
       $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo ("<p>seu R\$ ".(numfmt_format_currency($padrao, $real, "BRL"))). 
        " em US$ é \$ ".(numfmt_format_currency($padrao, $dolar, "USD</p>"));
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>
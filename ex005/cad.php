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
    <p>
    <?php 
    $num = $_REQUEST["numero"];
    
    echo "o numero entecessor de $num é " . ($num - 1) . "\n";
    echo "o numero sucessor de $num é " . ($num + 1) . "\n";
    ?>
    </p>
    <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
    
    </main>
</body>
</html>
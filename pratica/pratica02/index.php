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
        <h1>Sorteando um numero aleatório</h1>
        <?php 
        $min=0;
        $max=100;
        $num=mt_rand($min,$max);
        echo "<p>Gerando um numero aleatorio entre $min e $max!</p>"."\n";
        echo "<p>O numero sorteado é <b>$num</p>";
        ?> 
        
    </main>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ??1;
        $p1 = $_GET['p1'] ??1;
        $v2 = $_GET['v2'] ??1;
        $p2 = $_GET['p2'] ??1;

    ?>
    <main>
        <h1>Digite os valores e os pesos:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">valor1</label>
            <input type="number" name="v1" id="num" min="1"  required value="<?=$v1?>">
            <label for="p1">peso1</label>
            <input type="number" name="p1" id="num"  min="1"  required value="<?=$p1?>">
            <label for="v2">valor2</label>
            <input type="number" name="v2" id="num"  min="1" required value="<?=$v2?>">
            <label for="p2">peso2</label>
            <input type="number" name="p2" id="num" min="1"  required value="<?=$p2?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($v1 + $v2)/2;
            $mp = ($v1*$p1 + $v2*$p2)/($p1+$p2);
        ?>
        <h1>As médias sao:</h1>
        <p>Analisando os valores <?= $v1?> e <?= $v2?>:</p>
        <li>A <strong>Média Aritmética Simples</strong>  entre os valores é igual a <?= number_format($ma, 2, ",", ".")?>.</li>
        <li>A <strong>Média Aritmetica Ponderada</strong> com pesos <?= $p1?> e <?= $p2?> é igual a <?=number_format($mp, 2, ",", ".")?></li>

    </section>
    
</body>
</html>
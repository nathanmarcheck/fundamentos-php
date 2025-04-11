<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caixa</title>
    <link rel="stylesheet" href="style.css">
     <style>
     img.nota{
        height: 50px;
        margin: 5px;

    }
    </style>
</head>
<body>
    <?php 
    $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="saque">Qual o valor você deseja sacar?(R$)</label>
            <input type="number" name="saque" id="saqueid" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$100,
             R$50, R$10 e R$5</p>
             <input type="submit" value="Sacar">


        </form>
    </main>
    <?php 
        $resto = $saque;
        $tot100 = floor($resto/100);
        $resto %=100;
        $tot50= floor($resto/50);
        $resto %=50;
        $tot10 = floor($resto/10);
        $resto %=10;
        $tot5 = floor($resto/5);
        $resto %=5;
    ?>
    <section>
        <h2>Saque de R$<?=$saque?> realizado</h2>
        <p>O caixa eletrônico vai te entrrgar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="R$100" class="nota">x<?=$tot100?></li>
            <li><img src="img/50-reais.jpg" alt="R$50" class="nota">x<?=$tot50?></li>
            <li><img src="img/10-reais.jpg" alt="R$10"class="nota">x<?=$tot10?></li>
            <li><img src="img/5-reais.jpg" alt="R$5"class="nota">x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>
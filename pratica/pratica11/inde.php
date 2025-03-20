<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idade</title>
</head>
<body>
    <?php 
        $atual = date("Y");
        $nas = $_GET['nas'] ?? 1;
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Digite os anos:</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nas">Ano em que ano você nasceu?</label>
            <input type="number" name="nas" id="anonas" max="<?=$atual?>" value="<?=$nas?>">
            <label for="ano">Quer saber sua idade em que ano?(estamos em<strong> <?=$atual?></strong>)</label>
            <input type="number" name="ano" id="anof" value="<?=$ano?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        $idade=$ano-$nas;
        ?>
        <h1>Resultado</h1>
        <p>Quem nasceu em <strog><?=$nas?></strog> vai ter <strong><?=$idade?> anos</strong> em <strong><?=$ano?></strong></p>
    </section>
<strong>    </strong>
</body>
</html>
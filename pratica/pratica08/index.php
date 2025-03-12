<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $sal=$_GET["d1"];
    ?>
    <main>

        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="d1">Salario</label>
            <input type="number" name="d1" id="d1" value="<?=$sal?>" step="0.01">
            <p>Considerando o salário minimo de R$1.500</p>
            <input type="submit" value="Calcular">
        </form>
        <section>
                <h1>Quantos salários você tem</h1>
                <?php 
                $quant = intdiv($sal,1500);
                $res = $sal%1500;

                echo"A quantidade de salálarios é:R$". number_format($quant, 2, "," , ".") ."<br>mais:R$ ".number_format($res, 2, "," , ".");
                

                ?>

        </section>

    </main>
    
</body>
</html>
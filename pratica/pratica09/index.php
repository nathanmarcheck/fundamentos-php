<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raíz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num']??1;
    ?>
    <main>
       <h1>Escreva o número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h1>As raízes sao:</h1>
        <?php 
            $rq = sqrt($num);
            $rc = $num **(1/3);
        
            echo "<p>Analisando o <strong>número $num</strong>, temos:";
            echo "<ul> <li>A sua raíz quadradada é <strong>" . number_format($rq, 2, ",", ".")."</strong></l1>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($rc, 2, ",", ".")."</li></ul>";
            

        ?>
    </section>
    
</body>
</html>
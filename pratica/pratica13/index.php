<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $tempo = $_GET['tempo'] ?? 0;
    ?>
    
    <main>
        <h1>Calculando tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="tempo">qual o tempo em segundos?</label>
        <input type="number" name="tempo" id="tempoid" min = "0" step="1" required value="<?=$tempo?>">
        <input type="submit" value= "Reajustar">
        </form>
    </main>
    <?php
            $sobra = $tempo; 
            $semana = (int)($tempo / 604800);
            $sobra = $sobra % 604800;
            $dia = (int)($tempo / 86400);
            $sobra = $sobra % 86400;
            $hora = (int) ($sobra / 3600);
            $sobra = $sobra % 3600;
            $min = (int)( $sobra / 60);
            $sobra = $sobra % 60;
            $seg = $sobra;

        ?>
    <section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o  valor que você digitol, <strong><?=number_format($tempo, 0, ",", ".")?> de segundos</strong>
        equivale a um toral de:</p>
        <ol>
            <li><?=$semana?> semana</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>

        </ol>
    </section>
</body>
</html>
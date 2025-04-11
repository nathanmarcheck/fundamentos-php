<?php
include_once("conexao.php");

$sql = "SELECT * FROM alunos_deficiencia";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos Deficiência 2025</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Alunos Deficiência 2025:</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Aluno</th>
                <th>Deficiência</th>
                <th>Adaptação</th>
                <th>Instituição</th>
                <th>Informações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($aluno = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $aluno['id'] ?></td>
                <td><?= $aluno['aluno'] ?></td>
                <td><?= $aluno['deficiencia'] ?></td>
                <td><?= $aluno['adaptacao'] ?></td>
                <td><a href="#"><?= $aluno['instituicao'] ?></a></td>
                <td><a href="#">Visualizar</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
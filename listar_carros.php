<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar Carros</title>
</head>
<body>
    <ul>
        <?php
        include 'main.php';
        echo "<br><li><a href='main.php'>Voltar</a></li><br>";
        echo "<h2>Lista de Carros</h2>";
        listarCarros();
        ?>
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar Motos</title>
</head>
<body>
    <ul>
        <?php
        include 'main.php';
        echo "<br><li><a href='main.php'>Voltar</a></li><br>";
        echo "<h2>Lista de Motos</h2>";
        listarMotos();
        ?>
    </ul>
</body>
</html>

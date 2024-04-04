<?php
session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

function adicionarCarro($nome, $ra, $placa) {
    $aluno = "$nome|$ra|$placa\n";
    file_put_contents("carros.txt", $aluno, FILE_APPEND);
}

function adicionarMoto($nome, $ra, $placa) {
    $aluno = "$nome|$ra|$placa\n";
    file_put_contents("motos.txt", $aluno, FILE_APPEND);
}

function listarCarros() {
    $carros = file("carros.txt");

    foreach ($carros as $carro) {
        $dados = explode("|", $carro);
        echo "<li>$dados[0]|$dados[1]|$dados[2]</li>";
    }
}

function listarMotos() {
    $motos = file("motos.txt");

    foreach ($motos as $moto) {
        $dados = explode("|", $moto);
        echo "<li>$dados[0]|$dados[1]|$dados[2]</li>";
    }
}

if(isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $placa = $_POST['placa'];
    $tipo = $_POST['tipo'];


    if($tipo == 'carro'){
        adicionarCarro($nome, $ra, $placa);
    } else{
        adicionarMoto($nome, $ra, $placa);
    };
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
    <p>Selecione uma opção:</p>
    <ul>
        <li><a href="cadastrar.php">Cadastrar novo aluno</a></li>
        <li><a href="listar_carros.php">Listar carros</a></li>
        <li><a href="listar_motos.php">Listar motos</a></li>
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <form method="post" action="main.php">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="ra">RA:</label><br>
        <input type="text" id="ra" name="ra" required><br><br>
        <label for="tipo">Tipo de Veículo:</label>
        <select name="tipo" id="tipo">
            <option value="carro">Carro</option>
            <option value="moto">Moto</option>
        </select><br><br>
        <label for="placa">Placa:</label><br>
        <input type="text" id="placa" name="placa" required><br><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
    <p><a href="main.php">Voltar</p>
</body>
</html>

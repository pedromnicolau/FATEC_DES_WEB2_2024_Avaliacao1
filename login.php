<?php
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: main.php");
    exit;
}

if(isset($_POST['login'])) {
    if($_POST['username'] === 'portaria' && $_POST['password'] === 'FatecAraras') {
        $_SESSION['logged_in'] = true;
        header("Location: main.php");
        exit;
    } else {
        $error = "Credenciais incorretas. Por favor, tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) echo '<p style="color:red;">' . $error . '</p>'; ?>
    <form method="post" action="">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
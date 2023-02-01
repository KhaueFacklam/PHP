<?php
include_once 'users.php';
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="loginPage">
        <form method="post" class="cadastroForm">
            <input type="text" name="nome" class="inputText" placeholder="Nome">
            <input type="text" name="email" class="inputText" placeholder="Email">
            <input type="password" name="password" class="inputText" placeholder="Password">
            <input type="password" name="password2" class="inputText" placeholder="Password novamente">
            <input type="submit" name="submit" value="Cadastrar" class="inputSubmit">
            <a href="login.php" class="link">Voltar</a>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['nome'] == '' || $_POST['email'] == '' || $_POST['password'] == '' || $_POST['password2'] == '') {
            $error = 'Informe todos os campos.';
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = 'Formato de email inválido.';
        } else if ($_POST['password'] != $_POST['password2']) {
            $error = 'Senhas não correspondem.';
        } else if (strlen($_POST['password']) < 6) {
            $error = 'A senha deve conter no mínimo 6 caracteres.';
        } else {
            $cadastro = array(
                "id" => $id++,
                "nome" => $_POST['nome'],
                "email" => $_POST['email'],
                "password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
            );
            $_SESSION['cadastro'] = $cadastro;
            header('Location: login.php');
        }
    }
    ?>
    <p class="errorLogin"><?php echo $error ?? '' ?></p>
</body>

</html>
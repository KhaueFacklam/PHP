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
    <title>Login</title>
</head>

<body>
    <div class="loginPage">
        <form method="post" class="loginForm">
            <input type="text" name="email" placeholder="email" class="inputText" autofocus>
            <input type="password" name="password" placeholder="senha" class="inputText">
            <input type="submit" name="submit" value="Login" class="inputSubmit">
        </form>
    </div>
    <?php

    if (isset($_POST['email']) && isset($_POST['password'])) {

        foreach ($users as $user) {
            if ($_POST['email'] = $user['email'] && $_POST['password'] == $user['password']) {
                $_SESSION['login'] = $user['nome'];
                header('Location: home.php');
            }
        }

        if ($_POST['email'] = "admin" && $_POST['password'] == "admin") {
            $_SESSION['login'] = "admin";
            header('Location: homeAdmin.php');
        } else {
            $error = "Dados inválidos.";
        }
        
    }

    if (isset($_GET['error'])) {
        $error = "Faça login.";
    }
    ?>
    <p class="errorLogin"><?php echo $error ?? '' ?></p>
</body>

</html>
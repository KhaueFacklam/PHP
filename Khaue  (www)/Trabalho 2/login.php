<?php
include_once 'usuarios.php';
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
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>

<body>

    <form method="post" id="box">
        <h1>Bem Vindo!</h1>

        <input placeholder="E-mail" name="email" class="text" type="text">
        <input placeholder="Senha" name="password" class="text" type="password">
        <input name="submit" class="button" type="submit" value="Login">

        <a href="cadastro.php" class="link">Não possui conta? Cadastra-se</a>

    </form>


    <?php

    if (isset($_POST["submit"])) {

        if ($_POST["email"] != "" && $_POST["password"] != "") {

            $adminNome = "Admin";
            $adminEmail = "admin@mail.com";
            $adminSenha = "admin@mail.com";

            if ($_POST["email"] == $adminEmail && $_POST["password"] == $adminSenha) {
                $_SESSION["Admin"] = $adminNome;
                header("Location: admin.php");
            } else {

                $login = $_POST["email"];
                $password = $_POST["password"];
                $verifica = true;

                if (isset($_SESSION["cadastro"])) {
                    $usuarios[] = $_SESSION["cadastro"];
                }

                foreach ($usuarios as $usuario) {
                    if ($usuario["email"] == $login && $usuario["password"] == $password) {
                        $verifica = false;
                        header("Location: inicio.php");
                        break;
                    }
                }
                if ($verifica) {
                    echo "<h2 class='erro'>*dados incorretos</h2>";
                }
            }
        } else {
            echo "<h2 class='erro'>*campos não preenchidos</h2>";
        }
    }



    ?>

</body>

</html>
<?php
include "usuarios.php";
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
    <title>cadastro</title>
</head>

<body>

    <form method="post" id="box">
        <h1>Bem Vindo!</h1>

        <input placeholder="Nome" name="nome" class="text" type="text">
        <input placeholder="E-mail" name="email" class="text" type="text">
        <input placeholder="Senha" name="password" class="text" type="password">
        <input name="submit" class="button" type="submit" value="Cadastrar">

        <a href="login.php" class="link">Possui conta? Faça login</a>

    </form>

    <?php

    $verifica = 1;

    if (isset($_POST["submit"])) {
        if ($_POST["nome"] == "" || $_POST["email"] == "" || $_POST["password"] == "") {
            echo "<h2 class='erro'>*campos não preenchidos</h2>";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "<h2 class='erro'>*formato de email inválido</h2>";
        } else {
            foreach ($usuarios as $usuario) {
                if ($usuario["email"] == $_POST["email"]) {
                    $verifica++;
                }
            }
            if ($verifica == 1) {
                $novoUsuario = array(
                    "nome" => $_POST["nome"],
                    "email" => $_POST["email"],
                    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
                );
                $_SESSION["cadastro"] = $novoUsuario;
                header("Location: login.php");
            } else {
                echo "<h2 class='erro'>*este usuário já existe</h2>";
            }
        }
    }

    ?>




</body>

</html>
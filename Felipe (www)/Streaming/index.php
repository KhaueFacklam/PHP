<?php
if(!isset($_SESSION)){
session_start();
}
$API_KEY = '80238028c00880cee358041a14665840';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Streaming</title>
</head>

<body>

    <?php

    if (!isset($_SESSION['login'])) {//verifica que não está logado
        if (isset($_POST['submit'])) {//verifica se foi enviado login

            $emailTeste = "fe";//usuario teste
            $passwordTeste = "0";//usuario teste

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($_POST['email'])){
                echo "<p class='errorLogin'>Informe o email.</p>";
            } 
            if (empty($_POST['password'])) {
                echo "<p class='errorLogin'>Informe a senha.</p>";
            } 
            if (isset($_POST['email']) && isset($_POST['password'])){
                if ($emailTeste == $email && $passwordTeste == $password) { //valida login do usuario
                    $_SESSION['login'] = $email;
                    header('Location: index.php'); //atualiza page index que vai entrar no else (logado)
                } else {
                    echo "<p class='errorLogin'>Dados inválidos</p>";
                }
            }
        }
        include('login.php');//importa outro modulo
    } else {//verifica que está logado
        if (isset($_GET['logout'])) { //verifica se chamou logout
            unset($_SESSION); 
            session_destroy();
            header('Location: index.php'); //atualiza page
        }
        include('home.php');
        // header('Location: home.php');
    };
    ?>

</body>

</html>
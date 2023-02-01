<?php
include_once "back.php";
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

    <form action="back.php" method="post" id="box">
        <h1>Bem Vindo!</h1>

        <input placeholder="Nome" name="nome" class="text" type="text">
        <input placeholder="E-mail" name="email" class="text" type="text">
        <input placeholder="Senha" name="password" class="text" type="password">

        <input type="submit" class="button" value="Cadastrar">

        <a href="login.php" class="link">Possui conta? Faça login</a>

    </form>





</body>

</html>
<?php

    // Importe o arquivo "funcoes.php"
    include_once "funcoes.php";

    // Chame a função grava_arquivo com os argumentos corretos. 
    // Dica: os argumentos vêm do formulário no final deste arquivo.

    if(isset($_POST["nome"]) && isset($_POST["telefone"])){
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        grava_arquivo($nome, $telefone);
    }

?>

<form method="post" action="index.php">
    Nome: <input type="text" name="nome" id="nome">
    <br><br>
    Telefone: <input type="text" name="telefone" id="telefone">
    <br><br>
    <input type="submit">
</form>

<a href="mostra.php">Mostrar agenda<a/>

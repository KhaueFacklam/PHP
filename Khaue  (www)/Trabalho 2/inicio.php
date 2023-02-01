<?php
include_once 'produtos.php';
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
    <title>inicio</title>
</head>

<body>


        <form method="post" id="box">
            <h2>Estoque de Produtos</h2>

            <input placeholder="Nome do produto" name="nome" class="text" type="text">
            <input placeholder="Descricao" name="descricao" class="text" type="text">
            <input placeholder="Preço" name="preco" class="text" id="" type="number">
            <input placeholder="Quantidade" name="quantidade" class="text" id="" type="number">
            <input name="submit" class="button" type="submit" value="Listar/Registrar Produto">

            <button class="button"><a href="logout.php" class="link">Log Out</a></button>
        </form>


    <?php

    if (isset($_POST["submit"])) {

        if ($_POST["nome"] == "" || $_POST["descricao"] == "" || $_POST["preco"] == "" || $_POST["quantidade"] == "") {
            foreach ($produtos as $linha) {
                echo "<br></br>";
                foreach ($linha as $chave => $conteudo) {
                    echo "<div>" . ucfirst($chave) . ": " . $conteudo . "</div>";
                }
            }
        } else {
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];
            $quantidade = $_POST["quantidade"];

            $verifica = true;

            foreach ($produtos as $chave => $produto) {
                if ($produto["nome"] == $_POST["nome"]) {
                    $produtos[$chave]["descricao"] = $descricao;
                    $produtos[$chave]["preco"] = $preco;
                    $produtos[$chave]["quantidade"] += $quantidade;
                    $verifica = false;
                    break;
                }
            }

            if ($verifica) {
                $novoproduto = array(
                    "nome" => $_POST["nome"],
                    "descricao" => $_POST["descricao"],
                    "preco" => $_POST["preco"],
                    "quantidade" => $_POST["quantidade"]
                );
                $produtos[] = $novoproduto;
            }

            foreach ($produtos as $linha) {
                echo "<br></br>";
                foreach ($linha as $chave => $conteudo) {
                    echo "<div>" . ucfirst($chave) . ": " . $conteudo . "</div>";
                }
            }
        }
    }

























    ?>



</body>

</html>
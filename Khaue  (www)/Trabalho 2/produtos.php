<?php
if (!isset($_SESSION)) {
    session_start();
}

$produtos = array(
    array(
        "nome" => "Trakinas",
        "descricao" => "Bolacha recheada",
        "preco" => 0.75,
        "quantidade" => 15
    ),
        array(
            "nome" => "Coca-Cola",
            "descricao" => "Refrigerante",
            "preco" => 2.50,
            "quantidade" => 20
            )
        );
?>
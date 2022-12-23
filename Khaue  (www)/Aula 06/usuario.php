<?php

    echo "Nome: " . strtoupper($_POST["nome"]) . " " . strtoupper($_POST["sobrenome"]) . "<br><br>";

    $idade = 2022 - $_POST["anoDeNascimento"];

    echo "Idade: $idade" . " anos" . "<br><br>";

    echo "Sexo: " . $_POST["sexo"] . "<br><br>";

    if (in_array( "vazio", $_POST["redeSociais"])) {
        echo "Não possui redes sociais";
    } else {
        echo "Redes Sociais: <br>";
        foreach ($_POST["redeSociais"] as $i){
                echo "- " . $i . "<br>";
        }
    }

    echo "<br>Senha: " . strrev($_POST["sexo"]);



?>
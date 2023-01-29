<?php

    $nome = strtoupper($_POST['nome']);
    $sobrenome = strtoupper($_POST['sobrenome']);
    $idade = 2022 - $_POST['anoNascimento'];
    $sexo = $_POST['sexo'];
    $redesSociais = $_POST['redesSociais'];
    $senha = $_POST['senha'];
    $ahnes = strrev($senha);


    echo "<p>Nome completo: $nome $sobrenome</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Sexo: $sexo</p>";
    if(in_array('Nenhuma', $redesSociais) == true ){
        echo "Redes Sociais: Nenhuma.";
    } else{
        echo "Redes Sociais: ";
        foreach($redesSociais as $r){
            echo "$r; ";
        }
    }
    echo "<p>$ahnes</p>"

?>
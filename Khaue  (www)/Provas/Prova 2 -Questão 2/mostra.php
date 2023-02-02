<?php
    // Importe o arquivo "funcoes.php"
    include_once "funcoes.php";

    $texto = le_arquivo();

    if($texto != "") {


        // Mostre na página o nome e o telefone em linhas separadas.
        $frase = $texto;
        //$vetor = explode(" ", $frase); 

        // Exemplo:
        // 
        // Nome: Sérgio
        // Telefone: 987654321

        echo fgets($texto) . "</ br>";
        fclose($texto);


    }else {
        echo "Arquivo vazio";
    }
?>

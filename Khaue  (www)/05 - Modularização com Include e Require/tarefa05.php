<?php

include('uncoes.php'); // aqui ele não encontrará o arquivo, apresentando um warning
include_once('funcoes.php'); //aqui ele mostrará o arquivo normalmente

include('funcoes.php'); // aqui ele não mostrará o arquivo, pois já foi declarado o include_once, isto é, apenas uma única vez

require('uncoes.php'); // aqui não dará continuação ao codigo porque o arquivo não foi encontrado

require_once('funcoes.php'); // aqui ele funcionará normalmente
require('funcoes.php'); // aqui ele não mostrará o arquivo, pois já foi declarado anteriormente




echo "<br><br>--------------------------------1---------------------------------<br><br>";

    echo compara(rand(1,10), rand(1,10));

echo "<br><br>--------------------------------2---------------------------------<br><br>";    

    echo potencial(2,3);

echo "<br><br>--------------------------------3---------------------------------<br><br>";
      
        tabuada(rand(1,10));

echo "<br><br>--------------------------------4---------------------------------<br><br>";

        maioridade(rand(0,110));

echo "<br><br>--------------------------------5---------------------------------<br><br>";

        $vet = array();
        
        for ($i=0; $i < 10; $i++) { 
            $vet[$i] = rand(-10,10);
        }

        echo ordenar($vet);

?>
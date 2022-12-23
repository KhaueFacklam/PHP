<?php

//======================================================= ARRAY =======================================================

//DECLARANDO

    $v1 = array(1, 4, "dois", 0);

//NÚMERANDO OU NOMENANDO ÍNDICES

    $v2 = array("Nome" => "Khaue", "Telefone" => "051 98282170", 0 => "Coco", "Idade" => 33);

//INCREMENTANDO

    $v1[] = 7; //no fim
    array_push($v1, 7); //no fim
    array_unshift($v1, 7); //no início

//DECREMENTANDO

    array_shift($v1); //do ínicio
    array_pop($v1); //do final
    unset($v2["Telefone"]); //por nome
    unset($v2[0]); //por índice

//ACESSANDO SEU TAMANHO

    $tamanho = count($v2); 

//PERCORRENDO

    foreach($v1 as $i){ //foreach normal
        echo "$i ";
    };

    foreach($v2 as $i => $conteudo){ //foreach associativo
        echo "<br>O conteudo no índice $i é $conteudo";
    };

//ORDENANDO

      sort($v1); //por conteúdo
     rsort($v1); //ordem reversa

     asort($v1); //por conteúdo mas sem tira-los de seus índices
    arsort($v1); //ordem reversa

     ksort($v1); //por índice
    krsort($v1); //ordem reversa  

//====================================================== MATRIZ ======================================================

//DECLARANDO

    $matriz = array (array(2,3),
                     array(3,4),
                     array(9,5));

    $matriz[2][0] = $matriz[1][1]; //modificando a matriz com os próprios valores  
    

//PERCORRENDO

    foreach ($matriz as $linha)
    {
        foreach($linha as $i => $conteudo)
        {
                echo "<div> $conteudo </div>";
        }
    }




?>
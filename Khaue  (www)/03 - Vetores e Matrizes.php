<?php

//======================================= ARRAY =========================================

//DECLARANDO

    $v1 = array(1, 4, "dois", 0);


//NOMENANDO ÍNDICES

    $v2 = array("Nome" => "Khaue", "Telefone" => "051 98282170", 0 => "Coco", "Idade" => 33);

//INCREMENTANDO

    $v1[] = 7; //no fim
    array_push($v1, 7); //no fim
    array_unshift($v1, 7); //no início
    print_r ($v1); //imprimindo


//DECREMENTANDO

    array_shift($v1); //do ínicio
    array_pop($v1); //do final
    unset($v2["Telefone"]); //por chave
    unset($v2[0]); //por índice

//ACESSANDO SEU TAMANHO

    $tamanho = count($v2); 

//PERCORRENDO O VETOR

    $v3 = array("Nome" => "Khaue", "Telefone" => "051 98282170", 0 => "Coco", "Idade" => 33);

    foreach($v3 as $conteudo){ //foreach normal
        echo "$conteudo ";
    };

    foreach($v3 as $chave => $conteudo){ //foreach associativo com a chave
        echo "<br>O conteudo no índice $chave é $conteudo";
    };
    

//ORDENANDO

      sort($v1); //por conteúdo
     rsort($v1); //ordem reversa

     asort($v1); //por conteúdo mas sem tira-los de seus índices
    arsort($v1); //ordem reversa

     ksort($v1); //por índice
    krsort($v1); //ordem reversa  

//============================================= MATRIZ =================================================

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

//EXEMPLO MAIS COMPLEXO

    $cadastros = array(
        array(
            "id" => 1,
            "nome" => "João Silva",
            "idade" => 25,
            "email" => "joao.silva@gmail.com",
            "senha" => "joao.silva@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 1950
        ),
        array(
            "id" => 2,
            "nome" => "Rafael Cardoso",
            "idade" => 32,
            "email" => "rafacardoso@gmail.com",
            "senha" => "rafacardoso@gmail.com",
            "e.civil" => "Casado",
            "salario" => 5541
        ),
        array(
            "id" => 3,
            "nome" => "Gabriela Schidt",
            "idade" => 21,
            "email" => "gabischidt@gmail.com",
            "senha" => "gabischidt@gmail.com",
            "e.civil" => "Solteira",
            "salario" => 3214
        ),
        array(
            "id" => 4,
            "nome" => "Roberta Oliveira",
            "idade" => 38,
            "email" => "roberta.oliveira@gmail.com",
            "senha" => "roberta.oliveira@gmail.com",
            "e.civil" => "Divorciada",
            "salario" => 4258
        ),
        array(
            "id" => 5,
            "nome" => "Pedro Santos",
            "idade" => 17,
            "email" => "pebolado@gmail.com",
            "senha" => "pebolado@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 2100
        )
    );

    foreach($cadastros as $linha){ // Assossiativo! Percorrendo pelos nomes da chaves de cada array interno
        echo "<div>" . $linha["id"] . "</div>";
        echo "<div>" . $linha["nome"] . "</div>";
    }


    foreach ($cadastros as $linha) 
    {
        foreach($linha as $chave => $conteudo)  // percorrendo um por um
        {
            echo "<div> $conteudo </div>";
        }
    }

    




?>
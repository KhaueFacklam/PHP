<?php

//ALEATÓRIO
	$a = rand(1,100);

//EXPONENCIAÇÃO
	$base = 2;
	$expoente = 3;
    echo pow($base, $expoente);

//PARÂMETRO DINÂMICO
	function somar () {
		$parametros = func_get_args(); //gera um array com os parâmetros passados
		$tamanho = func_num_args(); // verifiica o número total de parâmetros
		$soma = 0;
		
		for($i = 0; $i < $tamanho; $i++) {
			$soma += $parametros[$i];
		}
		
		return $soma;
	}

	echo somar(1, 8, 1);

	
//IMPRIMI VETORES E MATRIZES DE MANEIRA ORGANIZADA.
	$vetor[0] = 4;
	$vetor[1] = 2;
	$vetor[2] = 5;

	print_r($vetor);
	
//VERIFICA O TAMANHO DE UMA STRING, INCLUSIVE ESPAÇOS EM BRANCO.
	$frase = 'hello world!';
	echo strlen($frase);
	
//ELIMINA OS ESPAÇOS EM BRANCO NO INICIO E NO FINAL DE UMA STRING.
	$nome = "    khauê Tavares   ";
	echo trim($nome);

//QUEBRA UMA STRING E COLOCA AS PALAVRAS EM UM VETOR.
	$frase = 'hello world!';
	$vetor = explode(" ", $frase); 	
	print_r($vetor);
	
//VERIFICA QUANTAS PALAVRAS UMA STRING POSSUI.
	$frase = 'hello world!';
	echo str_word_count($frase);
	
//GERA UM VETOR E COLOCA CADA LETRA EM UMA POSIÇÃO.
	$frase = 'hello world!';
	$vetor = str_split($frase);
	print_r($vetor);
	
//TRANSFORMA UM VETOR EM UMA STRING.
	$string = implode($vetor);
	print_r($string);
	

//CONVERTE TUDO PARA MINÚSCULAS E MAIÚSCULAS
	$string = " Mary Had A Little Lamb and She LOVED It So";
	echo strtolower($string);
	echo strtoupper($string);

//CONVERTE PARA MAIÚSCULA O PRIMEIRO CARACTERE 
	$frase = 'hello world!';
	echo ucfirst($frase);

//REVERTE UMA STRING
	$frase = 'hello world!';
	echo strrev($frase);

//ENCONTRA A POSIÇÃO DA PRIMEIRA OCORRÊNCIA DE UMA STRING
	$frase = 'abc';
	$palavra   = 'b';
	$posicao = strpos($frase, $palavra); //se colocar um "i", ele não diferencia maisculas de mínusculas => stripos();
	echo $posicao; 

//CONTA O NÚMERO DE OCORRÊNCIAS EM UMA SUBSTRING
	$text = 'This is a test';
	echo substr_count($text, 'is'); //dá 2

//REPETE UMA STRING
	echo str_repeat("-=", 10);


//SUBSTITUI TODAS AS OCORRÊNCIAS DA STRING DE PROCURA COM A STRING DE SUBSTITUIÇÃO
	$frase = 'Hello world!';
	echo str_replace("world", "Grêmio", $frase);


	
?>
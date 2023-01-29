<?php

//switch case
	$dia = rand(1,8);

    switch ($dia) {
        case 1:
		case 2:
        case 3:
        case 4:
        case 5:
			echo "Dia de Semana";
			break;
        case 6:
        case 7:
			echo "Final de Semana";
			break;
		default:
			echo "Dia não Existe";
	}
	
//funcao com parâmetro
	echo compara(rand(1,10), rand(1,10));

	function compara ($n1, $n2) {
		return "<br>" . $n1 * $n2 . "<br>";
	}
	
	

//conversão de tipo de variável
	$texto = "texto";
	$valor = (int)$texto;

//função com escopos
	function vaiDarCerto () {
			global $varGlobal;
			global  $varExterna;
			$varGlobal = 'Valor Local';
			echo $varExterna;
		}
	echo vaiDarCerto();
	echo $varGlobal;


//passagem por referencia
	$A = 0; //A vale 0
	
	alterar($A);
	function alterar (&$x) {
		$x = 5; //agora A vale 5
	}

	echo $A;

//opeador ternário
	$a = 8;
	$b = "oito";
	echo $a == $b ? "As variáveis SÃO iguais!" : "As variáveis NÃO são iguais!";

<?php

//valores aleatório
	$a = rand(1,100);

//switch case
	$mes = rand(1,12);

    switch ($mes) {
        case 1:
		echo "Mês 1: janeiro";
		break;
        case 2:
		echo "Mês 2: fevereiro";
		break;
        case 3:
		echo "Mês 3: março";
		break;
        case 4:
		echo "Mês 4: abril";
		break;
        case 5:
		echo "Mês 5: maio";
		break;
        case 6:
		echo "Mês 6: junho";
		break;
        case 7:
		echo "Mês 7: julho";
		break;
        case 8:
		echo "Mês 8: agosto";
		break;
        case 9:
		echo "Mês 9: setembro";
		break;
        case 10:
		echo "Mês 10: Outubro";
		break;
        case 11:
		echo "Mês 11: novembro";
		break;
        case 12:
		echo "Mês 12: dezembro";
		break;
	}
	
//funcao com parâmetro
	function compara ($n1, $n2) {
		return "<br>" . $n1 * $n2 . "<br>";
	}
	
	echo compara(rand(1,10), rand(1,10));

	
	
//exponenciação
	$base = 2;
	$expoente = 3;
    echo pow($base, $expoente);

//conversão de tipo de variável
$valor = (int)$valor2;


//função com escopos
function vaiDarCerto () {
        global $varGlobal;
        global  $varExterna;
        $varGlobal = 'Valor Local';
        echo $varExterna;
    }
echo vaiDarCerto();
echo $varGlobal;

?>
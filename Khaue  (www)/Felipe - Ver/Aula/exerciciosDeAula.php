<?php

//função 1
function calculaQuadrado ($numero) {
    $numero = (int)$numero;
    return $numero * $numero;
}
echo calculaQuadrado(125);
//função 2
function exibeFrase() {
    
    echo "<p>Frase chamada por uma função</p>";
    
}
echo exibeFrase();

//função com escopos
$varExterna = 'Valor externo';
function vaiDarCerto () {
        global $varGlobal;
        global  $varExterna;
        $varGlobal = 'Valor Local';
        echo $varExterna;
    }
echo vaiDarCerto();
echo $varGlobal;

//função com variavel static
function andar ($distancia) {
    static $soma;
    $soma += $distancia;
    return $soma;
}

echo andar(1) . "<br>";
echo andar(10) . "<br>";
echo andar(21) . "<br>";
echo andar(220) . "<br>";
echo andar(1) . "<br>";

//func_get_args
function exibeParametros () {
    
    $parametros = func_get_args();

    foreach($parametros as $indice => $valor){
        echo "Parametro $indice: $valor <br>";
    }

}
exibeParametros('Valor 1', 'Valor 2', 'Valor 3');


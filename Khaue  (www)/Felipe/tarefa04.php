<?php
//------------------------------------------1--------------------------------------------
echo "<h2>1)</h2>";
function compara($valor1, $valor2){
    if($valor1 > $valor2){
        echo "O primeiro numero [$valor1] é maior que o segundo [$valor2] <br>";
    }
    else if($valor1 < $valor2){
        echo "O primeiro numero [$valor1] é menor que o segundo [$valor2] <br>";
    } else {
        echo "Os dois números são iguais [$valor1] <br>";
    }
}

compara(rand(1, 10), rand(1, 10));

//-------------------------------------------2-------------------------------------------
echo "<h2>2)</h2>";
function potencial($base, $expoente) {
    return pow($base, $expoente);
}

echo potencial(2, 3);

//--------------------------------------------3------------------------------------------
echo "<h2>3)</h2>";
function tabuada($valor){
    $count = 1;
    if($valor < 1 or $valor > 10){
        echo "Valor [$valor] inválido. Por favor, informe um valor entre 1 e 10";
    } else {
        do{
            echo "$valor x $count = " . $valor * $count . "<br>";
            $count++;
        }while($count <= 10);
    }
}

echo tabuada(rand(1, 15));

//--------------------------------------------4------------------------------------------
echo "<h2>4)</h2>";
function maioridade($idade){
    if($idade < 18){
        echo "<p color='red'>Menor de Idade – É necessária a assinatura do Pai ou Responsável!</p>";
    } else if ($idade >= 18) {
        echo "<p color='blue'>Parabéns, você já é um adulto!</p>";
    }
}
maioridade(rand(1, 65));

//--------------------------------------------5------------------------------------------
echo "<h2>5)</h2>";
function ordenar($vet){
    echo "Ordem original: "; 
    foreach($vet as $v){
        echo "$v, ";
    }
    echo "<br>";

    sort($vet);
    echo "Ordem crescente: ";
    foreach($vet as $v){
        echo "$v, ";
    };
    echo "<br>";
    
    rsort($vet);
    echo "Ordem decrescente: ";
    foreach($vet as $v){
        echo "$v, ";
    }
} 
    
$vet = array();
for($i=0; $i<=10; $i++){
        array_push($vet, rand(1, 100));
}
ordenar($vet);

?>
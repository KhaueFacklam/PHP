<?php
//------------------------------------------1--------------------------------------------
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
//------------------------------------------2--------------------------------------------
    function potencial($base, $expoente) {
        return pow($base, $expoente);
    }
//------------------------------------------3--------------------------------------------
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
//------------------------------------------4--------------------------------------------
    function maioridade($idade){
        if($idade < 18){
            echo "<p style=color:red>Menor de Idade – É necessária a assinatura do Pai ou Responsável!</p>";
        } else if ($idade >= 18) {
            echo "<p style=color:blue>Parabéns, você já é um adulto!</p>";
        }
    }
//------------------------------------------5--------------------------------------------
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
?>
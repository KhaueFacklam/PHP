<?php

echo "<br><br>--------------------------------1---------------------------------<br><br>";

    function compara ($n1, $n2) {
        if ($n2 > $n1){
            echo "O primeiro número [$n1] é menor que o segundo [$n2].<br>";
        } else if ($n1 > $n2){
            echo "O segundo número [$n1] é maior que o segundo [$n2].<br>";
        } else {
            echo "Os dois números são iguais [$n2]";
        }
    }

    echo compara(rand(1,10), rand(1,10));

echo "<br><br>--------------------------------2---------------------------------<br><br>";    
    
    function potencial ($base, $expoente) {
    return pow($base, $expoente);
    }

    echo potencial(2,3);

echo "<br><br>--------------------------------3---------------------------------<br><br>";
        function tabuada ($n1) {

            if ($n1 < 1 or $n1 > 10){
                echo "Valor incorreto";
            } else {
                for ($contador=1; $contador <= 10; $contador++) { 
                    echo "$n1 x $contador = " . $n1 * $contador . "<br>";
                }
            }
        }
        
        tabuada(rand(1,10));


echo "<br><br>--------------------------------4---------------------------------<br><br>";

        function maioridade($idade){
            if($idade < 18){
                echo "<p style=color:red> Menor de Idade – É necessária a assinatura do Pai ou Responsável!</p>";
            } else if ($idade >= 18){
                echo "<p style=color:blue> Parabéns, você já é um adulto!</p>";
            }
        }

        maioridade(rand(0,110));


echo "<br><br>--------------------------------5---------------------------------<br><br>";

        $vet = array();
        
        for ($i=0; $i < 10; $i++) { 
            $vet[$i] = rand(-10,10);
        }

        function ordenar($vet) {

            echo "Maneira em que foi gerado: "; 
            for ($i=0; $i < 10; $i++) { 
                echo $vet[$i] . ", ";
            }
            
            echo "<br>";
        
            sort($vet);

            echo "Ordem crescente: "; 
            for ($i=0; $i < 10; $i++) { 
                echo $vet[$i] . ", ";
            }

            echo "<br>";
        
            rsort($vet);

            echo "Ordem derescente: "; 
            for ($i=0; $i < 10; $i++) { 
                echo $vet[$i] . ", ";
            }
            
        }

        echo ordenar($vet);

?>
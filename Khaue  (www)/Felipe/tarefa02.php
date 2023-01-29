<?php
//------------------------------------------1--------------------------------------------
echo "<h2>1)</h2>";
$n = rand(1, 10);

if($n < 5){
    echo "<p>$n é menor que 5</p>";
} else if($n > 5){
    echo "<p>$n é maior que 5</p>";
} else {
    echo "<p>$n é igual a 5</p>";
}


//-------------------------------------------2-------------------------------------------
echo "<h2>2)</h2>";
$n1 = rand(0, 10) * 3.5;
$n2 = rand(0, 10) * 6.5;

$media = ($n1 + $n2) / 10;

echo "<p>Nota 1: $n1</p>";
echo "<p>Nota 2: $n2</p>";
echo "<p>Média ponderada: " . $media . " (sem number_format)</p>";
echo "<p>Média ponderada: " . number_format($media, 1) . " (com number_format)</p>";
if(number_format($media, 1) >= 7){
    echo "Aluno APROVADO";
}else {
    echo "Aluno REPROVADO";
}


//--------------------------------------------3------------------------------------------
echo "<h2>3)</h2>";
$n1 = rand(0, 50);
$n2 = rand(0, 50);
$n3 = rand(0, 50);

echo "<p>Valor 1: <b>$n1</b></p>";
echo "<p>Valor 2: <b>$n2</b></p>";
echo "<p>Valor 3: <b>$n3</b></p>";

$a=array();
array_push($a, $n1, $n2, $n3);
if(min($a)>10){
    echo "Menor Valor: " . min($a);
    echo "<p>O menor Valor é maior do que 10</p>";
} else{
    echo "Menor Valor: " . min($a);
}

//---------------------------------------------4-----------------------------------------
echo "<h2>4)</h2>";
    $mes = rand(1, 12);
    switch ($mes) {
        case 1:
          echo "Mês 1: Janeiro";
          break;
        case 2:
          echo "Mês 2: Fevereiro";
          break;
        case 3:
          echo "Mês 3: Março";
          break;
        case 4:
          echo "Mês 4: Abril";
          break;
        case 5:
          echo "Mês 5: Maio";
          break;
        case 6:
          echo "Mês 6: Junho";
          break;
        case 7:
          echo "Mês 7: Julho";
          break;
        case 8:
          echo "Mês 8: Agosto";
          break;
        case 9:
          echo "Mês 9: Setembro";
          break;
        case 10:
          echo "Mês 10: Outubro";
          break;
        case 11:
          echo "Mês 11: Novembro";
          break;
        case 12:
          echo "Mês 12: Dezembro";
          break;

      }
?>
<?php
/*
1 - include('func.php') Não encontra o arquivo, avisa o erro mas da continuidade a execução do código

2 - require('func.php'); //Não encontra o arquivo, avisa o erro e encerra a execução do código

3 - include('funcoes.php');
    include('funcoes.php'); Erro de redeclaração. tenta importar um arquivo que ja foi importado antes

4 - require('funcoes.php');
    require('funcoes.php'); Erro de redeclaração. tenta importar um arquivo que ja foi importado antes
*/

include('funcoes.php');
//-------------------------------------------1-------------------------------------------
echo "<h2>1)</h2>";
compara(rand(1, 10), rand(1, 10));

//-------------------------------------------2-------------------------------------------
echo "<h2>2)</h2>";
echo potencial(2, 3);

//-------------------------------------------3-------------------------------------------
echo "<h2>3)</h2>";
echo tabuada(rand(1, 15));

//--------------------------------------------4------------------------------------------
echo "<h2>4)</h2>";
maioridade(rand(1, 65));

//--------------------------------------------5------------------------------------------
echo "<h2>5)</h2>";
$vet = array();
for($i=0; $i<=10; $i++){
    array_push($vet, rand(1, 100));
}
ordenar($vet);

?>
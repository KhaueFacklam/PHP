<?php

// Questão 1 - Gerar 2 valores aleatórios. Efetuar a soma das variáveis armazenando seu resultado na variável X. Apresentar o valor das variáveis A, B e X no final.

$a = rand(1,100);
$b = rand(1,100);

$X = $a + $b;


echo "Questão 1";
echo "<br>A = $a - B = $b - X = $X <br>";

// Questão 2 - A fórmula para calcular a área de uma circunferência é: Área = π*R², sendo que o valor de π é 3.14159. Gerar um valor aleatório entre 1 e 10 para o raio e efetuar o cálculo da área da circunferência. Mostrar o valor do raio e da área ao final.

$pi = 3.14159;
$raio = rand(1,10);

$area = $pi * ($raio * $raio);

echo "<br> Questão 2";
echo "<br> O RAIO é $raio e a ÁREA é $area <br>";

// Questão 3 - Faça um algoritmo que gere uma temperatura aleatória em Fahrenheit e calcula a temperatura correspondente em Celsius. Ao final o programa deve exibir as duas temperaturas.

$fahrenheit = rand(-10,110);
$celsius = ($fahrenheit - 32) / 1.8;

echo "<br> Questão 3";
echo "<br> Temperatura em Fahrenheit é $fahrenheit e em Celsius $celsius";

?>
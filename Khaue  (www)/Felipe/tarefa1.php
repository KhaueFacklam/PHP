<?php

echo "<h2>1)</h2>";
$A = rand(1,50);
$B = rand(1,50);
$X = $A + $B;
echo "<p>A = $A</p>";
echo "<p>B = $B</p>";
echo "<p>A + B = $X</p>";

echo "<h2>2)</h2>";
$raio = rand(1,10);
$area = pi() * pow($raio, 2);
echo "<p>Raio = $raio</p>";
echo "<p>Area = $area</p>";

echo "<h2>3)</h2>";
$F = rand(-259, 212);
$C = (5 * ($F-32) / 9);
echo "<p>Fahrenheit = $F</p>";
echo "<p>Celsius = $C</p>";

?>
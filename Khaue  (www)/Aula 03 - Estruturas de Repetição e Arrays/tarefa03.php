<?php echo 
      
      //1. Elabore um algoritmo que gere um número aleatório entre 1 e 10 e imprima o valor   gerado junto com uma das seguintes mensagens: "Número maior do que 5", "Número igual a 5" ou "Número menor do que 5".

    $rand = rand(1,10);

    if ($rand > 5) {
      echo "<p>$rand - Numero maior do que 5</p>";
    } else if ($rand < 5) {
      echo "<p>$rand - Numero menor do que 5</p>";      
    } else {
      echo "<p>$rand - Numero igual a 5</p>";       
    }

      //2. Gere aleatoriamente 2 notas de um aluno (valores entre 0 e 10). A seguir, calcule a média do aluno, sabendo que a nota 1 tem peso 3.5 e a nota 2 tem peso 6.5. Considerando que a média para aprovação é 7.0, mostre no final as 2 notas, a média e se o aluno está aprovado ou reprovado. Obs: Pesquise as funções number_format e round no manual do PHP e entenda a diferença entre cada uma delas.

    $notaUm = rand(0,10);
    $notaDois = rand(0,10);

    $media = (($notaUm * 3.5) + ($notaDois * 6.5)) / 10;

    echo "<p>Nota 1: $notaUm</p>";
    echo "<p>Nota 2: $notaDois</p>";
    echo "<p>Media: " . number_format($media,1) . "</p>";

    if ($media >= 7) {
      echo "APROVADO";
    } else {
      echo "REPROVADO";
    }
  
      //3. Construa um algoritmo que gere três números inteiros entre 0 e 50 e imprima na tela qual o menor deles. Ainda, caso o menor número seja maior que 10, imprimir também  a seguinte mensagem: “O menor número é maior do que 10”.

    $n1 = rand(0,50);
    $n2 = rand(0,50);
    $n3 = rand(0,50);

    echo "<p>$n1</p>";
    echo "<p>$n2</p>";
    echo "<p>$n3</p>";

    if ($n1 < $n2 and $n1 < $n3) {
          echo "<p>$n1 é o menor numero</p>";
              if ($n1 > 10){
                  echo "<p>O menor número é maior do que 10";                
                }
    } else if ($n2 < $n1 and $n2 <> $n3) {
          echo "<p>$n2 é o menor numero</p>";
              if ($n2 > 10){
                  echo "<p>O menor número é maior do que 10";                
                }
    } else if ($n3 < $n1 and $n3 < $n2) {
          echo "<p>$n3 é o menor numero</p>"; 
              if ($n3 > 10){
                  echo "<p>O menor número é maior do que 10";                
                }
    }

      //4. Faça um algoritmo que gere um número aleatório entre 1 e 12 e imprima na tela o número gerado e o mês correspondente. Exemplo: "Mês 1: janeiro"

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
  ?> 
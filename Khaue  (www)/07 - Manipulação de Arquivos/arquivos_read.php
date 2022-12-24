<?php  
	
	$arquivo = fopen('meuarquivo.txt','r');

	if($arquivo == false) {
		dir("Não foi possível abrir o arquivo");
	}

	while(!feof($arquivo)) {
		echo fgets($arquivo) . "<br>";
	}

	fclose($arquivo);

?>
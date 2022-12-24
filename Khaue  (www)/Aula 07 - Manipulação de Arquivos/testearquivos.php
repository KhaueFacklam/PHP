<?php

	$arquivo = fopen('meuarquivo.txt','r+');
	$string = null;
	if($arquivo) {
		while(true) {
			$linha = fgets($arquivo);
			if($linha==null)
				break;

			// busca na linha atual o conteúdo que vai ser alterado
			if(preg_match("/Sérgio Fujii/", $linha)) {
				$string .= str_replace("Sérgio Fujii: 18 anos","Sérgio Fujii: 40 anos", $linha);
			} else {
				// vai colocando tudo numa nova string
				$string .= $linha;
			}
		}
		// move o ponteiro para o início pois o ftruncate() não fará isso
		rewind($arquivo);
		// trunca o arquivo apagando tudo dentro dele
		ftruncate($arquivo, 0);
		// reescreve o conteúdo dentro do arquivo

		if (!fwrite($arquivo, $string))
			die('Não foi possível atualizar o arquivo.');
		echo 'Arquivo atualizado com sucesso.';
		fclose($arquivo);
	}
?>


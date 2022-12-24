<?php

	$arquivo = fopen('meuarquivo.txt','a+');

	if($arquivo) {
		if(!fwrite($arquivo, "Novo conteúdo mais novo\n"))
			die('Não foi possível atualizar o arquivo.');
		echo 'Arquivo atualizado com sucesso';
		fclose($arquivo);
	}	
?>
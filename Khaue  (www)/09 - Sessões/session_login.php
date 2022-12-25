<?php
	
	// Inicia a sessão
	session_start(); /
	session_cache_expire(1); // Modifica o tempo de expiração (padrão são 180 minutos)

	// Cria chaves e adiciona valores
	$_SESSION['usuario'] = 'sergio';
	$_SESSION['senha']   = 'sergio123';
	
	// Exibi um valor salvo
	echo 'Olá ' . $_SESSION['usuario'];
	
	// Deleta uma variável
	unset($_SESSION['usuario'])

	// Destrói toda sessão
	session_destroy();

	// Verifica se a sessão não existe (isset verifica se uma variável foi iniciada)
	if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
		exit('Não há sessão ativa'); // mata o scrip e envia uma mensagem
	}

	// Verifica se a sessão do usuário está vazia
	if(empty($_SESSION['usuario']) && empty($_SESSION['senha'])) {
		exit('Sessão terminada! Faça o login novamente'); // mata o scrip e envia uma mensagem
	}



	


	// 




?>


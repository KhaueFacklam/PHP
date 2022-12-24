<?php
	// Modifica o tempo de expiração da sessão (padrão são 180 minutos)	
	//session_cache_expire(1);
	
	// Inicia a sessão
	session_start();

	// Cria as chaves e seus valores
	$_SESSION['usuario'] = 'sergio';
	$_SESSION['senha']   = 'sergio123';
	
	// Mostra uma frase na tela
	echo 'Olá ' . $_SESSION['usuario'];
?>


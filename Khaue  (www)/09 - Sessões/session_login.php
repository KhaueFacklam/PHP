<?php

// INICIA UMA SESSÃO
		//com tempo de expiração (padrão são 180 minutos)
	session_cache_expire(10); // expira em 10 minutos
	session_start();

		//sem tempo de expiração (padrão são 180 minutos)
	session_start();

// CRIA CHAVES E ADICIONA VALORES
	$_SESSION['usuario'] = 'sergio';
	$_SESSION['senha']   = 'sergio123';
	
// EXIBI UM VALOR
	echo 'Olá ' . $_SESSION['usuario'];
	
// DELETA UMA VARIÁVEL
	unset($_SESSION['usuario'])

// DESTRÓI TODA SESSÃO
	session_destroy();

// VERIFICA SE UMA SESSÃO NÃO EXISTE (isset confere se uma variável foi iniciada)
	if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
		exit('Não há sessão ativa'); // mata o scrip e envia uma mensagem
	} else {
		// Pode terminar a sessão dando unset nos campos da sessão ou com session_destroy.
		// session_destroy();
		unset($_SESSION['usuario']);
		unset($_SESSION['senha']);
		echo 'Sessão terminada, faça login novamente';
	}	  

// VERIFICA SE A SESSÃO DO USUÁRIO ESTÁ VAZIA
	if(empty($_SESSION['usuario']) && empty($_SESSION['senha'])) {
		exit('Sessão terminada! Faça o login novamente'); // mata o scrip e envia uma mensagem
	}



	


	// 




?>


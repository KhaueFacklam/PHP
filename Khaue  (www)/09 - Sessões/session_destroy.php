<?php
	session_start();

	if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
		exit('Não há sessão ativa');
	} else {
		// Pode terminar a sessão dando unset nos campos da sessão ou com session_destroy.
		// session_destroy();
		unset($_SESSION['usuario']);
		unset($_SESSION['senha']);
		echo 'Sessão terminada, faça login novamente';
	}	
	
?>

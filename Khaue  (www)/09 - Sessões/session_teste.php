<?php

	session_start();

	if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
		exit('Usuário não está logado');
	}

	echo 'Olá ' . $_SESSION['usuario'] . ', acesse seus dados abaixo...';

?>

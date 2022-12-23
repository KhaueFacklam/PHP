<?php 


	function calcula($texto) {

	$pontuacao = 0;

		$texto = strtoupper($texto);

		if(mb_strpos($texto,"PRESIDENTE") !== false) {
			$pontuacao -= 1500;
			processa($pontuacao);
			return "-1500 pontos! " . processa($pontuacao);
			
		} else if (mb_strpos($texto,"ASTRONAUTA") !== false){
			$pontuacao -= 1000;
			processa($pontuacao);
			return "-1000 pontos! " . processa($pontuacao);

		} else if (mb_strpos($texto,"DIRETOR") !== false){
			$pontuacao -= 500;
			processa($pontuacao);
			return "-500 pontos! " . processa($pontuacao);

		} else if (mb_strpos($texto,"DEDICADO") !== false){
			$pontuacao += 200;
			processa($pontuacao);
			return "200 pontos! " . processa($pontuacao);

		} else if (mb_strpos($texto,"DESENVOLVEDOR") !== false){
			$pontuacao += 800;
			processa($pontuacao);
			return "800 pontos! " . processa($pontuacao);

		} else if (mb_strpos($texto,"FELIZ") !== false){
			$pontuacao += 1000;
			return "1000 pontos! " . processa($pontuacao);
		} else {
			return "0 pontos! " . processa($pontuacao);
		}

	}

	function processa($pontuacao) {
		if($pontuacao < 0) {
			return "Você é arrogante.";
		} else if ($pontuacao > 0){
			return "Você é humilde.";
		} else if ($pontuacao == 0){
			return "indefinido.";
		}
	}

?>
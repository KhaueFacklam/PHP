<?php
	
    function grava_arquivo($nome, $telefone) {
        $filename = "agenda.txt";
        $texto = $nome . ":" . $telefone . "\n";

        $arquivo = fopen($filename, 'w');

        if($arquivo){
            if(!fwrite($arquivo, 'Conteudo')) {
                die('Não foi possível atualizar...');
            } else {
                file_put_contents($filename, $texto, FILE_APPEND); 
                echo 'Arquivo atualizado';
                fclose($arquivo);
            }
        }

        // Adicione o conteúdo da variável $texto no arquivo "agenda.txt".
        // Para isso, use a função file_put_contents com a flag FILE_APPEND.

    }

	function le_arquivo() {
        $filename = "agenda.txt";

        if(file_exists($filename)){
        	// Leia o conteúdo do arquivo usando a função file 
            $arquivo = fopen('agenda.txt','r');
            $texto = file_get_contents('agenda.txt');
            echo $texto;
            fclose($arquivo);
            
        	// com a flag FILE_IGNORE_NEW_LINES e atribua para a variável $texto.




        } else {
            $texto = "Não foi possível abrir o arquivo";
            return $texto;
        }
    }


?>
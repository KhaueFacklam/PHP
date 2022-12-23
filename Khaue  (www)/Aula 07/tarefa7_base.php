<?php
	
	$file = fopen("generic-food.csv", "r");
	
	$row = fgets($file);

	$vetor = explode(",", $row); 
	echo "<h1>" . $vetor[0] . "</h1>";

	do {
		$row = fgets($file);
		$vetor = explode(",", $row); 
		
		foreach ($vetor as $i) {

			if (substr_count($i, 'Fruit')) {

				if (substr_count($row, ')"')) {
					echo "<div>" . $vetor[0] . $vetor[1] . "</div>";
				} else {
					echo "<div>" . $vetor[0] . "</div>";
				}
			}
		}


	} while ($row);

	
	fclose($file);

?>
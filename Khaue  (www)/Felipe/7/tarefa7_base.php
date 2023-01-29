<?php
	$file = fopen("generic-food.csv", "r");
	$content = "";
	
	while(!feof($file)) {

		$row = fgets($file);
		if (mb_strpos($row, 'Fruit') !== false) {
			$content = explode(',', $row);

			if (strpos($content[1], ")")) {
				echo "<div>" . $content[0] . $content[1] . "</div>";
			} else {
				echo "<div>$content[0]</div>";
			}
		}
		
	};

	fclose($file);
?>
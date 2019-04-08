<?php
$file = fopen('feed.csv', "r");

		echo '<table cellspacing = "0" border = "1" width = "500">';
		while(!feof($file)) {
			$mass = fgetcsv($file, 2000);
			echo '<tr aling = "center">';
			echo '<td width = "25%">';
			echo $mass[1];
			echo '</td>';
			$pants = 'PANTS';
			$find = stripos($mass[1], $pants);
		if ($find === false) {
			echo '<td width = "25%">';
			echo $mass[4];
			echo '</td>';
		}else {
			echo '<td width = "25%">';
			$price_more_pants=$mass[4]*40/100+$mass[4];
			echo $price_more_pants;
			echo '</td>';
		}
			//var_dump($mass[1]);
}
		echo '</table>';
		fclose($file);
		
?>

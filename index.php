<?php
$file = fopen('feed.csv', "r");

		echo '<table cellspacing = "0" border = "1" width = "500">';
		while(!feof($file)) {
			$mass = fgetcsv($file, 2000);
			echo '<tr aling = "center">';
			echo '<td width = "25%">';
			echo $mass[4];
			echo '</td>';
			echo '<td width = "25%">';
			echo $mass[19];
			echo '</td>';
if ($mass[4]<$mass[19]) {
	echo '<td width = "25%">';
	  	  echo "$mass[12]";// code...
				echo '</td>';
					echo '</tr>';
} else {
	echo '<td width = "25%">';
	echo '</td>';// code...
}
}
		echo '</table>';
		fclose($file);
?>

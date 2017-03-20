<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>currency</title>
</head>
<body>
	<?php 
		$url = 'http://apis.is/currency/m5';
		$data = file_get_contents($url);
		$dataobj = json_decode($data, true);

		echo "<table >";
		for ($i=0; $i < count($dataobj['results']); $i++) { 
			echo "<tr>";
	    	echo "<th>" . $dataobj['results'][$i]['longName'] .  "</th>";
	    	echo "<th>" . $dataobj['results'][$i]['value'] .  "</th>";
	    	echo "</tr>";
	    }
		echo "</table>";
	 ?>
</body>
</html>
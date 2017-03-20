<!DOCTYPE html>
<html>
	<header>
	</header>
	<body>
		<?php
	    	$content = file_get_contents('pics.json');
	    	$data = json_decode($content, true);

	    	for ($i=0; $i < count($data['pictures']); $i++) { 
	    		echo $data['pictures'][$i]['name'],  "<br>";
	    		echo '<img src="'.$data['pictures'][$i]['path'].'"/>', "<br>";

	    	}
		?>
	</body>
</html>

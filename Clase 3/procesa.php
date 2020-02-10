<!DOCTYPE html>
<html>
<head>
	<title>Procesa</title>
</head>
<body>
	<h1>Procesa</h1>
	<?php
		//var_dump($_POST);
		foreach ($_POST as $key => $value) {
			echo "$key = $value <br>";
		}

		$nombre = $_POST["nombre"];
		echo "Mi nombre es $nombre";
	?>
</body>
</html>
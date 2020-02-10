<!DOCTYPE html>
<html>
	<head>
		<title>Mi primer PHP</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

			//phpinfo();

			//comentario

			echo "<h1><b>Hola</b> mundo</h1>";


		?>
		<p>
			<?php 
				$miVariable = "mi pagina";
				echo "Bienvenido a $miVariable <br>"; //interpreta el valor de la variable
				echo 'Bienvenido a $miVariable <br>';  //interpreta como si fuera texto

				$x = 55;
				$y = 2;
				$z = $x * $y;

				echo "la multiplicacion de $x por $y es $z ";
				var_dump($z);

				$miArreglo = [
								'llave1' => 'val1',
								'llave2' => 'val2',
								'llave3' => 'val3'
							];

				$miArreglo2 = array();
				$miArreglo2[] = "dato1";
				echo "<ol>";

				foreach ($miArreglo as $key => $dato) {
					echo "<li>$key = $dato </li>";
				}

				echo "</ol>";

			?>
		</p>

	</body>
</html>
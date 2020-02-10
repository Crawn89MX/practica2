<!DOCTYPE html>
<html>
<head>
	<title>indexTarea</title>
</head>
<body>
	<center><h1>Tareas programadas</h></h1>
		<table border="1">
	<?php
		require_once ('Tarea.php');   //llama al archivo de Tarea

		$res = new Tarea;   //aqui se ejecuta la funcion 
		$stm = $res->index();

		$result = $stm->fetchAll();
        echo "<tr><th>id</th> <th>tarea</th>  <th>importancia</th> ";

	    foreach($result as $key => $value){
	        echo "<tr><td>" . $value["id"] . "</td><td>" . $value["tarea"] . "</td><td>" . $value["prioridad"] . "</td></tr>";
	    }
	?>	
	</table>
	<!--conexion-->
	<!--consulta-->
	<!--tabla-->
	<!--metodo index()-->
</body>
</html>
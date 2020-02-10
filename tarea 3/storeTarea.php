<!DOCTYPE html>
<html>
<head>
	<title>storeTarea</title>
</head>
<body>
	<?php
		require_once ('Tarea.php');   //llama al archivo de Tarea

        $tarea = $_POST["tarea"];			// recoge de las variables el nombre de tarea
        $prioridad = $_POST["prioridad"];	// recoge de las variables la prioridad de la tarea

		$tar = new Tarea;
		$tar->store($tarea,$prioridad);   //aqui se ejecuta la funcion 

		header("Location: indexTarea.php");
	?>
</body>
</html>
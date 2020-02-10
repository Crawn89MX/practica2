	<?php

	require_once ('conexion.php');   //llama al archivo de conexion
	
	class Tarea
	{
		public $pdo;

		function __construct() {

			try{
				$this->pdo = new Conexion();				// llama a la clase de conexion para establecer una conexion
	            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	//alch no se que hace pero tu dejalo
	            $this->pdo->exec("SET CHARACTER SET utf8");   						//establece el tipo de caracteres a utilizar

			}catch (Exception $e){
	            die($e->getMessage());			// error en caso de que no jale
	        }

		}
		
		function store($tarea,$prioridad)    //obviamente la funcion
	    {

	        try{
	            $stm    = $this->pdo->prepare("INSERT INTO `tareas`( `tarea`, `prioridad`) VALUES ('$tarea','$prioridad')");   // hace la consulta a la base 
	            $stm->execute();

	        }catch (Exception $e){
	            die($e->getMessage());			// error en caso de que no jale
	        }
	    }
	

		function index()    //obviamente la funcion
	    {

	        try{

	            $stm    = $this->pdo->prepare("SELECT * FROM `tareas`");   // hace la consulta a la base 
	            $stm->execute();

	            return $stm;

	        }catch (Exception $e){
	            die($e->getMessage());			// error en caso de que no jale
	        }
	    }
	}
	
	?>
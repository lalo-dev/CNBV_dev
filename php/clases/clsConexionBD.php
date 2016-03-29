<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 15/03/2016 23:17:34																		  *
	**********************************************************************************************/
	
	require("php/configuracion/config.php");
	
	class conectorDB extends configuracion //clase principal de conexion y consultas
	{
		private $conexion;
			
		public function __construct()
		{
			$this->conexion = parent::conectar(); //creo una variable con la conexión
			return $this->conexion;
		}
	
		// 	public function consultarBD($consulta, $valores = array())  //funcion principal, ejecuta todas las consultas
		public function consultarBD($consulta, $valores)  //funcion principal, ejecuta todas las consultas
		{
				
			$resultado = false;
				
			if($statement = $this->conexion->prepare($consulta))  //prepara la consulta
			{
				if(preg_match_all("/(:\w+)/", $consulta, $campo, PREG_PATTERN_ORDER)) //tomo los nombres de los campos iniciados con :xxxxx
				{
					$campo = array_pop($campo); //inserto en un arreglo
					foreach($campo as $parametro)
					{
						$statement->bindValue($parametro, $valores[substr($parametro,1)]);
					}
				}
	
				try
				{
					if(!$statement->execute()) //si no se ejecuta la consulta...
					{
						echo "<pre>";
						print_r($statement->errorInfo()); //imprimir errores
						echo "</pre>";
						die("generado desde clsConsultas.php");
					}
						
					$resultado = $statement->fetchAll(PDO::FETCH_ASSOC); //si es una consulta que devuelve valores los guarda en un arreglo.
					$statement->closeCursor();
				}
				catch(PDOException $e)
				{
					echo "Error de ejecución: \n";
					print_r($e->getMessage());
				}
			}
			return $resultado;
			$this->conexion = null; //cerramos la conexión
		} /// Termina funcion consultarBD
	}/// Termina clase conectorDB
?>
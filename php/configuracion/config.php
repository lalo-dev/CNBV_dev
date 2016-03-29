<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 15/03/2016 23:14:59																		  *
	**********************************************************************************************/
	
	abstract class configuracion
	{
	
		protected $datahost;
	
		protected function conectar($archivo = 'configuracion.ini')
		{
// 			if(!$ajustes = parse_ini_file($archivo, true))
// 			{
// 				throw new exception ('No se puede abrir el archivo ' . $archivo . '.');
// 			}
			
// 			$controlador = $ajustes["database"]["driver"]; //controlador (MySQL la mayoría de las veces)
// 			$servidor = $ajustes["database"]["host"]; //servidor como localhost o 127.0.0.1 usar este ultimo cuando el puerto sea diferente
// 			$puerto = $ajustes["database"]["port"]; //Puerto de la BD
// 			$basedatos = $ajustes["database"]["schema"]; //nombre de la base de datos
			
			$controlador = CNBV_BD_DRIVER; //controlador (MySQL la mayoría de las veces)
			$servidor = CNBV_BD_HOST; //servidor como localhost o 127.0.0.1 usar este ultimo cuando el puerto sea diferente
			$puerto = CNBV_BD_PUERTO; //Puerto de la BD
			$basedatos = CNBV_BD_BASE; //nombre de la base de datos
			
			try
			{
// 				return $this->datahost = new PDO (
// 						"mysql:host=$servidor;port=$puerto;dbname=$basedatos",
// 						$ajustes['database']['username'], //usuario
// 						$ajustes['database']['password'], //constrasena
// 						array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
// 				);

				return $this->datahost = new PDO (
						"mysql:host=$servidor;port=$puerto;dbname=$basedatos",
						CNBV_BD_USUARIO, //usuario
						CNBV_BD_CONTRASENA, //constrasena
						array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
				);
			}
			catch(PDOException $e)
			{
				echo "Error en la conexión: ".$e->getMessage();
			}
		}
	}
?>
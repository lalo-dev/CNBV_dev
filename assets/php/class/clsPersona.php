<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 02/03/2016 01:19:18																		  *
	**********************************************************************************************/
	
	class Persona
	{
		private $personas;
	
		public function obtenerPersonas()
		{
			$consulta = "SELECT * FROM personas";
			$valores = null;
	
			$oConectar = new conectorDB; //instanciamos conector
			$this->personas = $oConectar->consultarBD($consulta,$valores);
	
			return $this->personas;
		} //Termina funcion obtenerPersonas();
	
	
		public function registrarPersonas($nombre,$apellido,$edad)
		{
			$registrar = false; //creamos una variable de control
			$consulta = "INSERT INTO personas
					VALUES (:idPersona, :nombre, :apellido, :edad)";
	
			//VALORES PARA REGISTRO
			$valores = array("idPersona"=>"NULL",
					"nombre"=>$nombre,
					"apellido"=>$apellido,
					"edad"=>$edad);
	
			$oConexion = new conectorDB; //instanciamos conector
			$registrar = $oConexion->consultarBD($consulta, $valores);
	
			if($registrar !== false)
			{
				return true;
			}
			else
			{
				return false;
			}
		} //Termina funcion registrarUsuarios()
	}/// TERMINA CLASE USUARIOS ///
?>
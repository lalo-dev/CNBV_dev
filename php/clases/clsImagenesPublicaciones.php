<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 22:16:30																		  *
	**********************************************************************************************/
	
	class ImagenPublicacion
	{
		private $idImagenPublicacion;
		private $idPublicacionImagenesPublicaciones;
		private $nombreImagenesPublicaciones;
		private $idEstatusImagenesPublicaciones;
		private $idUsuarioCreadorImagenesPublicaciones;
		private $fechaCreacionImagenesPublicaciones;
		private $idUsuarioModificadorImagenesPublicaciones;
		private $fechaModificacionImagenesPublicaciones;
	
		private $arrayImagenesPublicaciones;
		private $arrayCoincidencias;
	
		public function __construct(
				$idImagenPublicacion,
				$idPublicacionImagenesPublicaciones,
				$nombreImagenesPublicaciones,
				$idEstatusImagenesPublicaciones/*,
				$idUsuarioCreadorImagenesPublicaciones,
		$fechaCreacionImagenesPublicaciones,
		$idUsuarioModificadorImagenesPublicaciones,
		$fechaModificacionImagenesPublicaciones*/
		)
		{
			$this->idImagenPublicacion							= $idImagenPublicacion;
			$this->idPublicacionImagenesPublicaciones			= $idPublicacionImagenesPublicaciones;
			$this->nombreImagenesPublicaciones					= $nombreImagenesPublicaciones;
			$this->idEstatusImagenesPublicaciones				= $idEstatusImagenesPublicaciones;
			/*$this->idUsuarioCreadorImagenesPublicaciones		= $idUsuarioCreadorImagenesPublicaciones;
				$this->fechaCreacionImagenesPublicaciones			= $fechaCreacionImagenesPublicaciones;
			$this->idUsuarioModificadorImagenesPublicaciones	= $idUsuarioModificadorImagenesPublicaciones;
			$this->fechaModificacionImagenesPublicaciones		= $fechaModificacionImagenesPublicaciones;*/
		}
	
		public function getIdImagenPublicacion()
		{
			return $this->idImagenPublicacion;
		}
	
		public function getIdPublicacionImagenesPublicaciones()
		{
			return $this->idPublicacionImagenesPublicaciones;
		}
	
		public function getNombreImagenesPublicaciones()
		{
			return $this->nombreImagenesPublicaciones;
		}
	
		public function getIdEstatusImagenesPublicaciones()
		{
			return $this->idEstatusImagenesPublicaciones;
		}
	
		public function getIdUsuarioCreadorImagenesPublicaciones()
		{
			return $this->idUsuarioCreadorImagenesPublicaciones;
		}
	
		public function getFechaCreacionImagenesPublicaciones()
		{
			return $this->fechaCreacionImagenesPublicaciones;
		}
	
		public function getIdUsuarioModificadorImagenesPublicaciones()
		{
			return $this->idUsuarioModificadorImagenesPublicaciones;
		}
	
		public function getFechaModificacionImagenesPublicaciones()
		{
			return $this->fechaModificacionImagenesPublicaciones;
		}
	
		public function getArrayPublicaciones()
		{
			return $this->arrayImagenesPublicaciones;
		}
	
		public function getArrayCoincidencias()
		{
			return $this->arrayCoincidencias;
		}
	
		public function BuscarUnRegistro()
		{
			$existe = false;
			$query = "SELECT *
					  FROM ImagenesPublicaciones
					  WHERE idEstatusImagenesPublicaciones != '3';";
			$valores = array();
			$objConsulta = new conectorDB();
			// 			$this->arrayImagenesPublicaiones = $objConsulta->consultarBD($query, $valores);
			// 			if(count($this->arrayPublicaiones)>0)
				// 			{
				// 				$existe = true;
				// 			}
			return $existe;
		}
	
		public function BuscarCoincidenciasIdPublicacion()
		{
			$existe = false;
			$consulta = "SELECT *
						 FROM ImagenesPublicaciones
						 WHERE idPublicacionImagenesPublicaciones = " . $this->idPublicacionImagenesPublicaciones . "
						 AND idEstatusImagenesPublicaciones != '3';";
			$valores = array();
			$objConsulta = new conectorDB();
			$this->arrayCoincidencias = $objConsulta->consultarBD($consulta, $valores);
			if(count($this->arrayCoincidencias) > 0)
			{
				$existe = true;
			}
			return $existe;
		}
	
		public function BuscarTodosRegistros()
		{
			$existe = false;
			$query = "SELECT *
					  FROM ImagenesPublicaciones
					  WHERE idEstatusImagenesPublicaciones != '3';";
			$valores = array();
			$objConsulta = new conectorDB();
			$this->arrayImagenesPublicaiones = $objConsulta->consultarBD($query, $valores);
			if(count($this->arrayPublicaiones)>0)
			{
				$existe = true;
			}
			return $existe;
		}
		
		public function CrearRegistro()
		{
			$query = "INSERT INTO ImagenesPublicaciones
					  VALUES
						(
							:idImagenPublicacion,
							:idPublicacionImagenesPublicaciones,
							:nombreImagenesPublicaciones,
							:idEstatusImagenesPublicaciones,
							:idUsuarioCreadorImagenesPublicaciones,
							:fechaCreacionImagenesPublicaciones,
							:idUsuarioModificadorImagenesPublicaciones,
							:fechaModificacionImagenesPublicaciones
						)";
			$valores = array(
				"idImagenPublicacion"=>$this->idImagenPublicacion,
				"idPublicacionImagenesPublicaciones"=>$this->idPublicacionImagenesPublicaciones,
				"nombreImagenesPublicaciones"=>$this->nombreImagenesPublicaciones,
				"idEstatusImagenesPublicaciones"=>$this->idEstatusImagenesPublicaciones,
				"idUsuarioCreadorImagenesPublicaciones"=>$this->idUsuarioCreadorImagenesPublicaciones,
				"fechaCreacionImagenesPublicaciones"=>$this->fechaCreacionImagenesPublicaciones,
				"idUsuarioModificadorImagenesPublicaciones"=>$this->idUsuarioModificadorImagenesPublicaciones,
				"fechaModificacionImagenesPublicaciones"=>$this->fechaModificacionImagenesPublicaciones
			);
			
			$objConexion = new conectorDB;
			$res = $objConexion->consultarBD($query, $valores);
			
			if(empty($res))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>
<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 11/03/2016 13:23:35																		  *
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
	}
?>
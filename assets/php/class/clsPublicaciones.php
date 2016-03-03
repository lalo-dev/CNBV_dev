<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 02/03/2016 22:40:33																		  *
	**********************************************************************************************/
	
	class Publicacion
	{
		private $idPublicacion;
		private $idTipoPublicacionPublicaciones;
		private $tituloPublicaciones;
		private $descripcionPublicaciones;
		private $textoPublicaciones;
		private $idEstatusPublicaciones;
		private $idUsuarioCreadorPublicaciones;
		private $fechaCreacionPublicaciones;
		private $idUsuarioModificadorPublicaciones;
		private $fechaModificacionPublicaciones;
		
		private $arrPublicaiones;
		
		public function __construct(
										$idPublicacion,
										$idTipoPublicacionPublicaciones,
										$tituloPublicaciones,
										$descripcionPublicaciones,
										$textoPublicaciones,
										$idEstatusPublicaciones/*,
										$idUsuarioCreadorPublicaciones,
										$fechaCreacionPublicaciones,
										$idUsuarioModificadorPublicaciones,
										$fechaModificacionPublicaciones*/
								   )
		{
			$this->idPublicacion= $idPublicacion;
			$this->idTipoPublicacionPublicaciones= $idTipoPublicacionPublicaciones;
			$this->tituloPublicaciones= $tituloPublicaciones;
			$this->descripcionPublicaciones= $descripcionPublicaciones;
			$this->textoPublicaciones= $textoPublicaciones;
			$this->idEstatusPublicaciones= $idEstatusPublicaciones;
		}
		
		public function getIdPublicacion()
		{
			return $this->idPublicacion;
		}
		public function getIdTipoPublicacionPublicaciones()
		{
			return $this->idTipoPublicacionPublicaciones;
		}
		public function getTituloPublicaciones()
		{
			return $this->tituloPublicaciones;
		}
		public function getDescripcionPublicaciones()
		{
			return $this->descripcionPublicaciones;
		}
		public function getTextoPublicaciones()
		{
			return $this->textoPublicaciones;
		}
		public function getIdEstatusPublicaciones()
		{
			return $this->idEstatusPublicaciones;
		}
		public function getIdUsuarioCreadorPublicaciones()
		{
			return $this->idUsuarioCreadorPublicaciones;
		}
		public function getFechaCreacionPublicaciones()
		{
			return $this->fechaCreacionPublicaciones;
		}
		public function getIdUsuarioModificadorPublicaciones()
		{
			return $this->idUsuarioModificadorPublicaciones;
		}
		public function getFechaModificacionPublicaciones()
		{
			return $this->fechaModificacionPublicaciones;
		}
		public function getArrPublicaciones()
		{
			return $this->arrPublicaiones;
		}
		
		public function BuscarRegistro()
		{
			
		}
		
		public function BuscarRegistros()
		{
			$existe = false;
			$query = "SELECT *
					  FROM Publicaciones";
			$valores = array();
			$objConsulta = new conectorDB();
			$this->arrPublicaiones = $objConsulta->consultarBD($query, $valores);
			if(count($this->arrPublicaiones)>0)
			{
				$existe = true;
			}
			return $existe;
		}
	}
?>
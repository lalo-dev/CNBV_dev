<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 21:59:26																		  *
	**********************************************************************************************/
	
	class Publicacion
	{
		private $idPublicacion;
		private $idTipoPublicacionPublicaciones;
		private $tituloPublicaciones;
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
	
		public function BuscarUnRegistro()
		{
				
		}
	
		public function BuscarTodosRegistros()
		{
			$existe = false;
			$query = "SELECT *
					  FROM Publicaciones
					  WHERE idEstatusPublicaciones != '3';";
			$valores = array();
			$objConsulta = new conectorDB();
			$this->arrPublicaiones = $objConsulta->consultarBD($query, $valores);
			if(count($this->arrPublicaiones)>0)
			{
				$existe = true;
			}
			return $existe;
		}
	
		public function CrearRegistro()
		{
			$query = "INSERT INTO Publicaciones
					  VALUES
						(
							:idPublicacion,
							:idTipoPublicacionPublicaciones,
							:tituloPublicaciones,
							:textoPublicaciones,
							:idEstatusPublicaciones,
							:idUsuarioCreadorPublicaciones,
							:fechaCreacionPublicaciones,
							:idUsuarioModificadorPublicaciones,
							:fechaModificacionPublicaciones
						)";
			$valores = array(
					"idPublicacion"=>$this->idPublicacion,
					"idTipoPublicacionPublicaciones"=>$this->idTipoPublicacionPublicaciones,
					"tituloPublicaciones"=>$this->tituloPublicaciones,
					"textoPublicaciones"=>$this->textoPublicaciones,
					"idEstatusPublicaciones"=>$this->idEstatusPublicaciones,
					"idUsuarioCreadorPublicaciones"=>1,
					"fechaCreacionPublicaciones"=>date("Y") .  "-" . date("m") . "-" . date("d") . " " . date("h") . ":" . date("m") . ":" . date("s"),
					"idUsuarioModificadorPublicaciones"=>"1",
					"fechaModificacionPublicaciones"=>date("Y") .  "-" . date("m") . "-" . date("d") . " " . date("h") . ":" . date("m") . ":" . date("s")
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
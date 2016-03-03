<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 02/03/2016 20:47:42																		  *
	**********************************************************************************************/
	
// 	die("funciona...");
	class TipoPublicacion
	{
		private $tipoPublicacion;
		
		private $idTipoPublicacion;
		private $nombreTiposPublicaciones;
		private $descripcionTiposPublicaciones;
		private $imagenTiposPublicaciones;
		private $idEstatusTiposPublicaciones;
		private $idUsuarioCreadorTiposPublicaciones;
		private $fechaCreacionTiposPublicaciones;
		private $idUsuarioModificadorTiposPublicaciones;
		private $fechaModificacionTiposPublicaciones;
		
		private $arrCoincidencias;
		
		public function __construct(
										$idTipoPublicacion,
										$nombreTiposPublicaciones,
										$descripcionTiposPublicaciones,
										$imagenTiposPublicaciones,
										$idEstatusTiposPublicaciones/*,
										$idUsuarioCreadorTiposPublicaciones,
										$fechaCreacionTiposPublicaciones,
										$idUsuarioModificadorTiposPublicaciones,
										$fechaModificacionTiposPublicaciones*/
								   )
		{
			$this->idTipoPublicacion= $idTipoPublicacion;
			$this->nombreTiposPublicaciones= $nombreTiposPublicaciones;
			$this->descripcionTiposPublicaciones= $descripcionTiposPublicaciones;
			$this->imagenTiposPublicaciones= $imagenTiposPublicaciones;
			$this->idEstatusTiposPublicaciones= $idEstatusTiposPublicaciones;
		}
		
		public function getIdTipoPublicacion()
		{
			return $this->idTipoPublicacion;
		}
		public function getNombreTiposPublicaciones()
		{
			return $this->nombreTiposPublicaciones;
		}
		public function getDescripcionTiposPublicaciones()
		{
			return $this->descripcionTiposPublicaciones;
		}
		public function getImagenTiposPublicaciones()
		{
			return $this->imagenTiposPublicaciones;
		}
		public function getIdEstatusTiposPublicaciones()
		{
			return $this->idEstatusTiposPublicaciones;
		}
		public function getIdUsuarioCreadorTiposPublicaciones()
		{
			return $this->idUsuarioCreadorTiposPublicaciones;
		}
		public function getFechaCreacionTiposPublicaciones()
		{
			return $this->fechaCreacionTiposPublicaciones;
		}
		public function getIdUsuarioModificadorTiposPublicaciones()
		{
			return $this->idUsuarioModificadorTiposPublicaciones;
		}
		public function getFechaModificacionTiposPublicaciones()
		{
			return $this->fechaModificacionTiposPublicaciones;
		}
		public function getArrCoincidencias()
		{
			return $this->arrCoincidencias;
		}
		
		public function BuscarRegistro()
		{
			$existe = false;
			$query = "SELECT *
					  FROM TiposPublicaciones
					  WHERE :idTipoPublicacion,
					  AND :idEstatusTiposPublicaciones !=";
			$valores = array(
								"idTipoPublicacion"=>$this->idTipoPublicacion,
								"idEstatusTiposPublicaciones"=>3
							);
			$objConsulta = new conectorDB();
			$this->tipoPublicacion = $objConsulta->consultarBD($query, $valores);
			echo "<pre>";
				print_r($this->tipoPublicacion);
			echo "</pre>";
			die("desde la clase TipoPublicacion del archivo clsTiposPublicaciones.php");
		}
		
		public function BuscarRegistros()
		{
			$existe = false;
			$query = "SELECT *
					  FROM TiposPublicaciones";
// 					  WHERE :idTipoPublicacion,
// 					  AND :idEstatusTiposPublicaciones !=";
// 			$valores = array(
// 								"idTipoPublicacion"=>$this->idTipoPublicacion,
// 								"idEstatusTiposPublicaciones"=>3
// 							);
			$valores = array();
			$objConsulta = new conectorDB();
			$this->arrCoincidencias = $objConsulta->consultarBD($query, $valores);
			if(count($this->arrCoincidencias)>0)
			{
				$existe = true;
			}
			return $existe;
// 			if(count($this->arrCoincidencias)>0)
// 			{
// 				echo "algo tiene ---> " . count($this->arrCoincidencias) . "<br />";
// 			}
// 			else
// 			{
// 				echo "no tiene nada ---> " . count($this->arrCoincidencias) . "<br />";
// 			}
// 			die("aqui");
// 			echo "<pre>";
// 				print_r($this->arrCoincidencias);
// 			echo "</pre>";
// 			die("desde la clase TipoPublicacion del archivo clsTiposPublicaciones.php");
		}
	}
?>
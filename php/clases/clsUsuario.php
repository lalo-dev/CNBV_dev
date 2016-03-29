<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 15/03/2016 23:27:15																		  *
	**********************************************************************************************/
	
	class Usuario
	{
		private $idUsuario;
		private $idNivelAccesoUsuarios;
		private $idDepartamentoUsuarios;
		private $nombreUsuarios;
		private $apellidoPaternoUsuarios;
		private $apellidoMaternoUsuarios;
		private $nombreUsuarioUsuarios;
		private $contraseniaUsuarios;
		private $idEstatusUsuarios;
		private $idUsuarioCreadorUsuarios;
		private $fechaCreacionUsuarios;
		private $idUsuarioModificadorUsuarios;
		private $fechaModificacionUsuarios;
		
		private $arrayUsuarios;
		
		public function __construct(
										$idUsuario,
										$idNivelAccesoUsuarios,
										$idDepartamentoUsuarios,
										$nombreUsuarios,
										$apellidoPaternoUsuarios,
										$apellidoMaternoUsuarios,
										$nombreUsuarioUsuarios,
										$contraseniaUsuarios,
										$idEstatusUsuarios,
										$idUsuarioCreadorUsuarios,
										$fechaCreacionUsuarios,
										$idUsuarioModificadorUsuarios,
										$fechaModificacionUsuarios
								   )
		{

			$this->idUsuario					= $idUsuario;
			$this->idNivelAccesoUsuarios		= $idNivelAccesoUsuarios;
			$this->idDepartamentoUsuarios		= $idDepartamentoUsuarios;
			$this->nombreUsuarios				= $nombreUsuarios;
			$this->apellidoPaternoUsuarios		= $apellidoPaternoUsuarios;
			$this->apellidoMaternoUsuarios		= $apellidoMaternoUsuarios;
			$this->nombreUsuarioUsuarios		= $nombreUsuarioUsuarios;
			$this->contraseniaUsuarios			= $contraseniaUsuarios;
			$this->idEstatusUsuarios			= $idEstatusUsuarios;
			$this->idUsuarioCreadorUsuarios		= $idUsuarioCreadorUsuarios;
			$this->fechaCreacionUsuarios		= $fechaCreacionUsuarios;
			$this->idUsuarioModificadorUsuarios	= $idUsuarioModificadorUsuarios;
			$this->fechaModificacionUsuarios	= $fechaModificacionUsuarios;
		}

		public function getIdUsuario()
		{
			$this->idUsuario;
		}
		public function getIdNivelAccesoUsuarios()
		{
			$this->idNivelAccesoUsuarios;
		}
		public function getIdDepartamentoUsuarios()
		{
			$this->idDepartamentoUsuarios;
		}
		public function getNombreUsuarios()
		{
			$this->nombreUsuarios;
		}
		public function getApellidoPaternoUsuarios()
		{
			$this->apellidoPaternoUsuarios;
		}
		public function getApellidoMaternoUsuarios()
		{
			$this->apellidoMaternoUsuarios;
		}
		public function getNombreUsuarioUsuarios()
		{
			$this->nombreUsuarioUsuarios;
		}
		public function getContraseniaUsuarios()
		{
			$this->contraseniaUsuarios;
		}
		public function getIdEstatusUsuarios()
		{
			$this->idEstatusUsuarios;
		}
		public function getIdUsuarioCreadorUsuarios()
		{
			$this->idUsuarioCreadorUsuarios;
		}
		public function getFechaCreacionUsuarios()
		{
			$this->fechaCreacionUsuarios;
		}
		public function getIdUsuarioModificadorUsuarios()
		{
			$this->idUsuarioModificadorUsuarios;
		}
		public function getFechaModificacionUsuarios()
		{
			$this->fechaModificacionUsuarios;
		}
		public function getArrayUsuarios()
		{
			$this->arrayUsuarios;
		}
		
		public function BuscarIdUsuario()
		{
			$existe = false;
			$query = "SELECT *
					  FROM Usuarios
					  WHERE idUsuario = '".$this->idUsuario."';";
			$valores = array();
			$objConexion = new conectorDB();
			$registro = $objConexion->consultarBD($query, $valores);
			foreach($registro as $unR)
			{
				$existe = true;
				$this->idUsuario					= $unR["idUsuario"];
				$this->idNivelAccesoUsuarios		= $unR["idNivelAccesoUsuarios"];
				$this->idDepartamentoUsuarios		= $unR["idDepartamentoUsuarios"];
				$this->nombreUsuarios				= $unR["nombreUsuarios"];
				$this->apellidoPaternoUsuarios		= $unR["apellidoPaternoUsuarios"];
				$this->apellidoMaternoUsuarios		= $unR["apellidoMaternoUsuarios"];
				$this->nombreUsuarioUsuarios		= $unR["nombreUsuarioUsuarios"];
				$this->contraseniaUsuarios			= $unR["contraseniaUsuarios"];
				$this->idEstatusUsuarios			= $unR["idEstatusUsuarios"];
				$this->idUsuarioCreadorUsuarios		= $unR["idUsuarioCreadorUsuarios"];
				$this->fechaCreacionUsuarios		= $unR["fechaCreacionUsuarios"];
				$this->idUsuarioModificadorUsuarios	= $unR["idUsuarioModificadorUsuarios"];
				$this->fechaModificacionUsuarios	= $unR["fechaModificacionUsuarios"];
			}
			return $existe;
		}
		
		public function BuscarTodosRegistros()
		{
			$existe = false;
			$query = "SELECT *
					  FROM Usuarios
					  WHERE idEstatusUsuarios != '3';";
			$valores = array();
			$objConsulta = new conectorDB();
			$this->arrPublicaiones = $objConsulta->consultarBD($query, $valores);
			if(count($this->arrPublicaiones)>0)
			{
				$existe = true;
			}
			return $existe;
		}
		
		public function BuscarUsuarioLogin()
		{
			$existe = false;
			$query = "SELECT *
					  FROM Usuarios
					  WHERE
							nombreUsuarioUsuarios = '".$this->nombreUsuarioUsuarios."'
						AND contraseniaUsuarios = '".$this->funcionMD5($this->contraseniaUsuarios)."'
						AND idEstatusUsuarios != '3';";
			$valores = array();
			$objConsulta = new conectorDB();
			$usuario = $objConsulta->consultarBD($query, $valores);
			
			foreach($usuario as $campo)
			{
				$this->idUsuario					= $campo["idUsuario"];
				$this->idNivelAccesoUsuarios		= $campo["idNivelAccesoUsuarios"];
				$this->idDepartamentoUsuarios		= $campo["idDepartamentoUsuarios"];
				$this->nombreUsuarios				= $campo["nombreUsuarios"];
				$this->apellidoPaternoUsuarios		= $campo["apellidoPaternoUsuarios"];
				$this->apellidoMaternoUsuarios		= $campo["apellidoMaternoUsuarios"];
				$this->nombreUsuarioUsuarios		= $campo["nombreUsuarioUsuarios"];
				$this->contraseniaUsuarios			= $campo["contraseniaUsuarios"];
				$this->idEstatusUsuarios			= $campo["idEstatusUsuarios"];
				$this->idUsuarioCreadorUsuarios		= $campo["idUsuarioCreadorUsuarios"];
				$this->fechaCreacionUsuarios		= $campo["fechaCreacionUsuarios"];
				$this->idUsuarioModificadorUsuarios	= $campo["idUsuarioModificadorUsuarios"];
				$this->fechaModificacionUsuarios	= $campo["fechaModificacionUsuarios"];
			}
				
			if($this->idUsuario != "")
			{
				$existe = true;
			}
			
			/**/
// 			$query = "SELECT *
// 					  FROM Publicaciones
// 					  WHERE idEstatusPublicaciones != '3';";
// 			$valores = array();
// 			$objConsulta = new conectorDB();
// 			$this->arrPublicaiones = $objConsulta->consultarBD($query, $valores);
// 			if(count($this->arrPublicaiones)>0)
// 			{
// 				$existe = true;
// 			}
			/**/
			
			
			return $existe;
		}
		
		public function EjecutarQuerySelect($query)
		{
			$existe = false;
			$valores = array();
			$objConsulta = new conectorDB();
			
// 			foreach($objConsulta->consultarBD($query, $valores) as $campo)
// 			{
// 				$this->idUsuario					= $campo["idUsuario"];
// 				$this->idNivelAccesoUsuarios		= $campo["idNivelAccesoUsuarios"];
// 				$this->idDepartamentoUsuarios		= $campo["idDepartamentoUsuarios"];
// 				$this->nombreUsuarios				= $campo["nombreUsuarios"];
// 				$this->apellidoPaternoUsuarios		= $campo["apellidoPaternoUsuarios"];
// 				$this->apellidoMaternoUsuarios		= $campo["apellidoMaternoUsuarios"];
// 				$this->nombreUsuarioUsuarios		= $campo["nombreUsuarioUsuarios"];
// 				$this->contraseniaUsuarios			= $campo["contraseniaUsuarios"];
// 				$this->idEstatusUsuarios			= $campo["idEstatusUsuarios"];
// 				$this->idUsuarioCreadorUsuarios		= $campo["idUsuarioCreadorUsuarios"];
// 				$this->fechaCreacionUsuarios		= $campo["fechaCreacionUsuarios"];
// 				$this->idUsuarioModificadorUsuarios	= $campo["idUsuarioModificadorUsuarios"];
// 				$this->fechaModificacionUsuarios	= $campo["fechaModificacionUsuarios"];
// 			}
			
			if($this->idUsuario != "")
			{
				$existe = true;
			}
			return $existe;
		}
		
		private function funcionMD5($cadena)
		{
			return md5($cadena);
		}
		
		public function CrearRegistro()
		{
			$query = "INSERT INTO Usuarios
					  VALUES
						(
							:idUsuario,
							:idNivelAccesoUsuarios,
							:idDepartamentoUsuarios,
							:nombreUsuarios,
							:apellidoPaternoUsuarios,
							:apellidoMaternoUsuarios,
							:nombreUsuarioUsuarios,
							:contraseniaUsuarios,
							:idEstatusUsuarios,
							:idUsuarioCreadorUsuarios,
							:fechaCreacionUsuarios,
							:idUsuarioModificadorUsuarios,
							:fechaModificacionUsuarios
					)";
			$valores = array(
					"idUsuario"=>$this->idUsuario,
					"idNivelAccesoUsuarios"=>$this->idNivelAccesoUsuarios,
					"idDepartamentoUsuarios"=>$this->idDepartamentoUsuarios,
					"nombreUsuarios"=>$this->nombreUsuarios,
					"apellidoPaternoUsuarios"=>$this->apellidoPaternoUsuarios,
					"apellidoMaternoUsuarios"=>$this->apellidoMaternoUsuarios,
					"nombreUsuarioUsuarios"=>$this->nombreUsuarioUsuarios,
					"contraseniaUsuarios"=>$this->contraseniaUsuarios,
					"idEstatusUsuarios"=>$this->idEstatusUsuarios,
					"idUsuarioCreadorUsuarios"=>$this->idUsuarioCreadorUsuarios,
					"fechaCreacionUsuarios"=>$this->fechaCreacionUsuarios,
					"idUsuarioModificadorUsuarios"=>$this->idUsuarioModificadorUsuarios,
					"fechaModificacionUsuarios"=>$this->fechaModificacionUsuarios
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
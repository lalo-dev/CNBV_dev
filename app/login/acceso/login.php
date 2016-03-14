<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 12/03/2016 01:55:30																		  *
	**********************************************************************************************/
	include_once "../../assets/php/class/clsConsultas.php";
	
	if (!isset($_SESSION))
	{
		session_start();
	}
	
	$login = $_SERVER['PHP_SELF'];
	
	if (isset($_GET['accesscheck']))
	{
		$_SESSION['urlPrevia'] = $_GET['accesscheck'];
	}
	
	if (isset($_POST['txtUsuario']))
	{
		extract($_REQUEST);
		$autorizacionUsuario = "cvePermiso";
		//$accesoAutorizado = "../menuPrincipal.php";
		$accesoAutorizado = "../dashboard/";
		$accesoDenegado = "../login/";
		$redirectToReferrer = false;
		
		$consulta = "SELECT * FROM usuarios WHERE nombreUsuarioUsuarios = 'said' AND contraseniaUsuarios = 'said';";
		$valores = array();
		$objConsulta = new conectorDB();
		$res = $objConsulta->consultarBD($consulta, $valores);
		
		if(count($res)>0)
		{
		//$loginGroup  = mysql_result($res,0,'cvePermiso');
			$loginGroup = $res[0]['idTipoPersonaPersonas'];
			$_SESSION['idUser'] = $res[0]['idPersona'];
			$_SESSION['tipoUsuario'] = $res[0]['idTipoPersonaPersonas'];/**/
						$_SESSION['userName'] = $login;
			$_SESSION['userGroup'] = $loginGroup;
				
			if (isset($_SESSION['urlPrevia']) && false)
			{
			$accesoAutorizado = $_SESSION['urlPrevia'];
			}
					header("Location: " . $accesoAutorizado);
		}
		else
		{
			header("Location: ". $accesoDenegado."?e=x" );
			echo "<script>alert('Los datos de inicio de seccion no son validos')</script>";
		}
	}
?>
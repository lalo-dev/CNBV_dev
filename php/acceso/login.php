<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 14:01:13																		  *
	**********************************************************************************************/
	
	if(!isset($_SESSION)){
  		session_start();
	}

	$login = $_SERVER['PHP_SELF'];
	
	if(isset($_GET['accesscheck'])){
		$_SESSION['urlPrevia'] = $_GET['accesscheck'];
	}
	
	if(isset($_POST["login-username"]) && isset($_POST["login-password"]))
	{
		$autorizacionUsuario = "cvePermiso";

		$accesoAutorizado = "dashboard";
		$accesoDenegado = "index";
		$redirectToReferrer = false;
		
		$objUsuaio = new Usuario("", "", "", "", "", "", $_POST['login-username'], $_POST['login-password'], "", "", "", "", "");
		if($objUsuaio->BuscarUsuarioLogin())
		{
			$loginGroup				= 1;//$objUsuaio->getIdNivelAccesoUsuarios();
			$_SESSION["idUsuario"]	= 1;//$objUsuaio->getIdUsuario();
			$_SESSION["idNivel"]	= 1;//$objUsuaio->getIdNivelAccesoUsuarios();
			$_SESSION["idDepto"]	= 1;
			$_SESSION['userName']	= $login;
			$_SESSION['userGroup']	= $loginGroup;
			
			if (isset($_SESSION['urlPrevia']) && false)
			{
				$accesoAutorizado = $_SESSION['urlPrevia'];
			}
			header("Location:" . $accesoAutorizado);
		}
		else
		{
			echo "<script>alert('Los datos de inicio de seccion no son validos')</script>";
			header("Location: ". $accesoDenegado."?e=x" );
		}
	}
?>
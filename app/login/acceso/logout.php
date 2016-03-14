<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 12/03/2016 02:21:55																		  *
	**********************************************************************************************/
	
	if(!isset($_SESSION))
	{
		session_start();
	}
	
	$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
	if((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != ""))
	{
		$logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
	}
	
	if((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true"))
	{
		$_SESSION['userName'] = NULL;
		$_SESSION['userGroup'] = NULL;
		$_SESSION['urlPrevia'] = NULL;
		$_SESSION['idUser'] = NULL;
		$_SESSION['tipoUsuario'] = NULL;
		unset($_SESSION['userName']);
		unset($_SESSION['userGroup']);
		unset($_SESSION['urlPrevia']);
		unset($_SESSION['idUser']);
		unset($_SESSION['tipoUsuario']);
	
		$logoutGoTo = "../index.php";
		if ($logoutGoTo) {
			header("Location: $logoutGoTo");
			exit;
		}
	}
?>
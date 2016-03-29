<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 14:13:49																		  *
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
	
	if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true"))
	{
		$_SESSION["idUsuario"]	= NULL;
		$_SESSION["idNivel"]	= NULL;
		$_SESSION["idDepto"]	= NULL;
		$_SESSION['userName']	= NULL;
		$_SESSION['userGroup']	= NULL;
		
		unset($_SESSION['idUsuario']);
		unset($_SESSION['idNivel']);
		unset($_SESSION['idDepto']);
		unset($_SESSION['userName']);
		unset($_SESSION['userGroup']);
		
		$logoutGoTo = "index";
		if($logoutGoTo)
		{
			header("Location: $logoutGoTo");
			exit;
		}
	}
?>
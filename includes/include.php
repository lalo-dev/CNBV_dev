<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 02:22:39																		  *
	**********************************************************************************************/
	
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(E_ALL & ~E_WARNING);

	require "includes/define.php";
	require "php/clases/clsConexionBD.php";
	require "php/clases/clsUsuario.php";
	require "php/acceso/login.php";
	require "php/acceso/proteccion.php";
	require "php/acceso/logout.php";
?>
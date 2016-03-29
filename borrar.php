<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 17:30:44																		  *
	**********************************************************************************************/
	
	switch ($_GET["funcion"])
	{
		case "md5":
			echo funcionMD5($_GET["cadena"]);
		break;
	}
	
	function funcionMD5($cadena)
	{
		return md5($cadena);
	}
?>
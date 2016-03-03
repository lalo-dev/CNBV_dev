<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 02/03/2016 23:03:47																		  *
	**********************************************************************************************/
	
	include_once "../../assets/php/class/clsConsultas.php";
	include_once "../../assets/php/class/clsTiposPublicaciones.php";
	include_once "../../assets/php/class/clsPublicaciones.php";
	
	$objPublicacion = new Publicacion("", "", "", "", "", "");
	if($objPublicacion->BuscarRegistros())
	{
		$publicaciones = $objPublicacion->getArrPublicaciones();
		
		$objTipoPublicacion = new TipoPublicacion("", "", "", "", "");
		if($objTipoPublicacion->BuscarRegistros())
		{
			$tipPublicaciones = $objTipoPublicacion->getArrCoincidencias();
		}
	}
?>
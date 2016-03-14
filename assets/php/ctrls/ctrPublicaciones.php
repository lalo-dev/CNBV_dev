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
	include_once "../../assets/php/class/clsImagenesPublicaciones.php";
	
	class ctrPublicaciones
	{
		public function mostrarPublicaciones()
		{
			$objPublicacion = new Publicacion("", "", "", "", "", "");
			if($objPublicacion->BuscarTodosRegistros())
			{
				$publicaciones = $objPublicacion->getArrPublicaciones();
				$publicaciones_2 = array();
				foreach($publicaciones as $value)
				{
					$objImgPub = new ImagenPublicacion("", $value["idPublicacion"], "", "");
					if($objImgPub->BuscarCoincidenciasIdPublicacion())
					{
						$imagenes = array();
						foreach($objImgPub->getArrayCoincidencias() as $unaI)
						{
							$imagenes[] = $unaI["nombreImagenesPublicaciones"];
						}
// 						array_push($value, $imagenes);
						$value['imagenes'] = $imagenes;
// 						echo "<pre>";
// 						print_r($value);
// 						echo "</pre>";
					}
				}
				
				
					
// 				$objTipoPublicacion = new TipoPublicacion("", "", "", "", "");
// 				if($objTipoPublicacion->BuscarRegistros())
// 				{
// 					$tipPublicaciones = $objTipoPublicacion->getArrCoincidencias();
// 				}
			}
			return $publicaciones;
		}
	}
?>
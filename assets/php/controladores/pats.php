<?php
	include_once("../clases/conexion.php");

	$vConn = new ConexionBD();

	$vQuery = "SELECT idPat,nombre,anio,auditorias,seguimientos,observaciones,pras,validar,estatus FROM pat ORDER BY anio ASC";
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = '';

		foreach ($vRes as $pat) {
			$html .=	"
			<tr>
                <td>
                    <h3 class=\"h5 font-w600 push-10\">
                        <a class=\"link-effect\" href=\"javascript:mostrarPat(".$pat['anio'].");\">Programa Anual de Trabajo ".$pat['anio']."</a>
                    </h3>
                    <div class=\"push-10\">    
                        <span class=\"label label-primary\"><i class=\"fa fa-check\"></i> Programado".$pat['estatus']."</span>
                    </div>
                </td>
                <td class=\"h3 text-center\">".$pat['observaciones']."</td>
                <td class=\"h3 text-center\">".$pat['seguimientos']."</td>
                <td class=\"h3 text-center\">".$pat['observaciones']."</td>
                <td class=\"h3 text-center\">".$pat['pras']."</td>
                <td class=\"h3 text-center\">".$pat['validar']."</td>
            </tr>
			";
		}

		echo $html;



	
	// if(isset($_REQUEST['acc'])){
		
	// 	$vAcc = $_REQUEST['acc'];
		
	// 	switch($vAcc)
	// 	{
	// 		//########################################################################
	// 		//PATS
	// 		case "listaPats":
	// 				listaPats();
	// 			break;
	// 	}
				
	// }

	// //##############################        Sección PATS             #############################################
	// function listaPats() {
	// 	global $vConn;

	// 	$vQuery = "SELECT idPat,nombre,anio,auditorias,seguimientos,observaciones,pras,validar,estatus FROM pat ORDER BY anio ASC";
	// 	$vRes = $vConn->ExecuteWithReturn($vQuery);

	// 	$html = '';

	// 	foreach ($vRes as $pat) {
	// 		$html .=	"
	// 		<tr>
 //                <td>
 //                    <h3 class=\"h5 font-w600 push-10\">
 //                        <a class=\"link-effect\" href=\"javascript:mostrarPat(".$pat['anio'].");\">Programa Anual de Trabajo ".$pat['anio']."</a>
 //                    </h3>
 //                    <div class=\"push-10\">    
 //                        <span class=\"label label-primary\"><i class=\"fa fa-check\"></i> Programado".$pat['estatus']."</span>
 //                    </div>
 //                </td>
 //                <td class=\"h3 text-center\">".$pat['observaciones']."</td>
 //                <td class=\"h3 text-center\">".$pat['seguimientos']."</td>
 //                <td class=\"h3 text-center\">".$pat['observaciones']."</td>
 //                <td class=\"h3 text-center\">".$pat['pras']."</td>
 //                <td class=\"h3 text-center\">".$pat['validar']."</td>
 //            </tr>
	// 		";
	// 	}

	// 	echo $html;
	// }

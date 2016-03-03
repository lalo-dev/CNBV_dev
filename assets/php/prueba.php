<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prueba | Clase para conexion MySQL con PHP y PDO by elporfirio.com</title>
</head>

<body>
<?php
/**
 * @author elporfirio.com
 * @copyright 2013
 *
 * #############################
 * Archivo de prueba
 */
 
//requerimos solo la clase consultas
require_once"class/clsConsultas.php";
require_once "class/clsPersona.php";

/* Para consultar Personas */
if($_GET["accion"] && $_GET["accion"] == "c")
{
	$oDatosPersonas = new Persona;
	$personas_registradas = $oDatosPersonas->obtenerPersonas();
	echo "<pre>";
		print_r($personas_registradas);
	echo "</pre>";
}


/* Para registrar Personas */
if($_GET["accion"] && $_GET["accion"] == "i")
{
	$oRegistroPersonas = new Persona;
	$registro = $oRegistroPersonas->registrarPersonas("Juanito","Banana",27);
	
	if($registro)
	{
		header("Location:?accion=c");
	}
}
?>
</body>
</html>
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
require_once("class/class.consultas.php");

/* Para consultar Personas */
// $oDatosPersonas = new Persona;
// $personas_registradas = $oDatosPersonas->obtenerPersonas();

// print_r($personas_registradas);

/* Para consultar Pats */
$pat = new Pat;
$resPats = $pat->obtenerPats();

print_r($resPats);


/* Para registrar Personas */
// $oRegistroPersonas = new Persona;
// $registro = $oRegistroPersonas->registrarPersonas("Juanito","Banana",27);

// if($registro){ echo "Registro Satisfactorio"; }
?>
</body>
</html>
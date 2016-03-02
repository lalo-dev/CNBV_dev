<?php 

include_once("../clases/conexion.php");

$db = new Database();

$query = $db->prepare('SELECT * FROM pat');
$query->execute();

$res = $query->fetchAll();

foreach ($res as $key => $value) {
	echo $value['nombre'];
}
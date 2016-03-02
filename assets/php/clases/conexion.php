<?php 
/**
* Conexion a la base de datos
*/
class Database extends PDO
{
	
	public function __construct()
	{
		try {
			parent::__construct('mysql:host=localhost;dbname=cnbv','root','root');
			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die('La base de datos seleccionada no existe!');
		}
	}
}


<?php
/**
 * @author elporfirio.com
 * @copyright 2013
 *
 * #############################
 * Archivo de clases principales
 */
 
//Se requiere el archivo de configuracion
require("cfg/config.php");

class conectorDB extends configuracion //clase principal de conexion y consultas
{
	private $conexion;
		
	public function __construct(){
		$this->conexion = parent::conectar(); //creo una variable con la conexión
		return $this->conexion;										
	}
	
	public function consultarBD($consulta, $valores = array()){  //funcion principal, ejecuta todas las consultas
		$resultado = false;
		
		if($statement = $this->conexion->prepare($consulta)){  //prepara la consulta
			if(preg_match_all("/(:\w+)/", $consulta, $campo, PREG_PATTERN_ORDER)){ //tomo los nombres de los campos iniciados con :xxxxx
				$campo = array_pop($campo); //inserto en un arreglo
				foreach($campo as $parametro){
					$statement->bindValue($parametro, $valores[substr($parametro,1)]);
				}
			}
			try {
				if (!$statement->execute()) { //si no se ejecuta la consulta...
					print_r($statement->errorInfo()); //imprimir errores
				}
				$resultado = $statement->fetchAll(PDO::FETCH_ASSOC); //si es una consulta que devuelve valores los guarda en un arreglo.
				$statement->closeCursor();
			}
			catch(PDOException $e){
				echo "Error de ejecución: \n";
				print_r($e->getMessage());
			}	
		}
		return $resultado;
		$this->conexion = null; //cerramos la conexión
	} /// Termina funcion consultarBD
}/// Termina clase conectorDB

class Persona
{
	private $personas;
	
	public function obtenerPersonas(){
		$consulta = "SELECT * FROM personas";
		$valores = null;
		
		$oConectar = new conectorDB; //instanciamos conector
		$this->personas = $oConectar->consultarBD($consulta,$valores);
        
		return $this->personas;
	} //Termina funcion obtenerPersonas();
	
	
	public function registrarPersonas($nombre,$apellido,$edad){
        $registrar = false; //creamos una variable de control
		$consulta = "INSERT INTO personas
					VALUES (:nombre, :apellido, :edad)";
		
		//VALORES PARA REGISTRO
		$valores = array("nombre"=>$nombre,
						"apellido"=>$apellido,
						"edad"=>$edad);
		
		$oConexion = new conectorDB; //instanciamos conector
		$registrar = $oConexion->consultarBD($consulta, $valores);
		
		if($registrar !== false){
			return true;
		}
		else{
			return false;
		}
    } //Termina funcion registrarUsuarios()
}

/**
* PATS
*/
class Pat
{
	private $pat;

	public function obtenerPats() {
		$query = "SELECT * FROM pat";
		$valores = null;

		$conn = new conectorDB;
		$this->pat = $conn->consultarBD($query, $valores);

		return $this->pat;
	}
}
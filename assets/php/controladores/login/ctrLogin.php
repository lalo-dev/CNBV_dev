<?php
/**
 * Controlador Login
 */
require '../../clases/conexion.php';
$objData = new DataBase();
require '../../clases/session.php';
$objSess = new Session();

if(isset($_POST['login-username'])){
    $username = $_POST['login-username'];
    $password = $_POST['login-password'];
}

$sth = $objData->prepare('SELECT * FROM usuarios WHERE nombreUsuarioUsuarios = :userName AND contraseniaUsuarios = :password');
$sth->bindParam(':userName', $username);
$sth->bindParam(':password', $password);
$sth->execute();
$result = $sth->fetchAll();

if ($sth->rowCount() > 0 ) {
    $objSess->init();
    $objSess->set('idUser', $result[0]['idUsuario']);
    $objSess->set('naUser', $result[0]['nombreUsuarios']);
    echo "0s0p4nd4";
    //header('location: otra.php');

} else {
    echo "Usuario No encontrado";
}
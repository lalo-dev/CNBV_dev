<?php
/**
 * Pagina de ejemplo
 */
require '../../assets/php/clases/session.php';
$objSess = new Session();

$objSess->init();

echo $objSess->get('naUser');
echo '<br><a href="log_out.php">Salir</a>';
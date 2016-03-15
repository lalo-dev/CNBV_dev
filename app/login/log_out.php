<?php
/**
 * Log Out
 */
require '../../assets/php/clases/session.php';
$objSess = new Session();

$objSess->init();
$objSess->destroy();

header('location: index');
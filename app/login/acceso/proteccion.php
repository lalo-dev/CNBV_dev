<?php
	/**********************************************************************************************
	* Said Alarcón Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnologías de la Información y la Comunicación Área Sistemas Informaticós   	  *
	* 12/03/2016 02:21:40																		  *
	**********************************************************************************************/
	
	if (!isset($_SESSION))
	{
		session_start();
		//session_register("empresa");
		//$_SESSION['empresa'] = $_REQUEST['slcEmpresa'];//CREO QUE ESTA NO APLICA EN ESTA OCACION
	}
	$MM_authorizedUsers = "1,2,3,4";//$loginGroup que pueden ingresar al sistema
	$MM_donotCheckaccess = "false";
	
	// *** Restrict Access To Page: Grant or deny access to this page
	function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) {
		// For security, start by assuming the visitor is NOT authorized.
		$isValid = False;
	
		// When a visitor has logged into this site, the Session variable userName set equal to their username.
		// Therefore, we know that a user is NOT logged in if that Session variable is blank.
		if (!empty($UserName)) {
			// Besides being logged in, you may restrict access to only certain users based on an ID established when they login.
			// Parse the strings into arrays.
			$arrUsers = Explode(",", $strUsers);
			$arrGroups = Explode(",", $strGroups);
			if (in_array($UserName, $arrUsers)) {
				$isValid = true;
			}
			// Or, you may restrict access to only certain users based on their username.
			if (in_array($UserGroup, $arrGroups)) {
				$isValid = true;
			}
			if (($strUsers == "") && false) {
				$isValid = true;
			}
		}
		return $isValid;
	}
	
	$MM_restrictGoTo = "index.php";
	if (!((isset($_SESSION['userName'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['userName'], $_SESSION['userGroup'])))) {
		$MM_qsChar = "?";
		$MM_referrer = $_SERVER['PHP_SELF'];
		if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
		if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0)
			$MM_referrer .= "?" . $QUERY_STRING;
		$MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
		header("Location: ". $MM_restrictGoTo);
		exit;
	}
?>
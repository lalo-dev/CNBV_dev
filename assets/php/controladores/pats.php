<?php
	include_once("../clases/ConexionBD.php");

	$vConn = new ConexionBD();
	
	if(isset($_REQUEST['acc'])){
		
		$vAcc = $_REQUEST['acc'];
		
		switch($vAcc)
		{
			//########################################################################
			//PATS
			case "listaPats":
					listaPats();
				break;
		}
				
	}
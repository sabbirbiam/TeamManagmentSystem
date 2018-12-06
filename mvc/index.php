<?php
	$isPassedThroughController=true;
	$queryString = array_keys($_GET)[0]; //user-add
	$controller = explode("-",$queryString)[0]; //user
	$view=explode("-",$queryString)[1]; //add

	switch($controller){
		case "user":
			include("controller/$controller-controller.php");
			break;
	}
?>
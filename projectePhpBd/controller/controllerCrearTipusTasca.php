<?php
	session_start();

	function __autoload($nombre_clase) {
    	include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
	}

	$descripcioTipusTasca = $_POST['desc'];
	
	$nouTipusTasca = unserialize($_SESSION['empresa']);

	if ($descripcioTipusTasca == "") {
		header('Location: ../view/error/formulariBuit.html');
	} else {
		if (strlen($descripcioTipusTasca) < 1) {
        	header('Location: ../view/error/crearTascaError2.html');
        
        } else {
			$nouTipusTasca->inserirTipusTasca($codiTipusTasca,$descripcioTipusTasca);
			$_SESSION['empresa'] = serialize($nouTipusTasca);
        	header('Location: ../view/tipusTascaAfegitCorrecte.html');
        }
	}
?>
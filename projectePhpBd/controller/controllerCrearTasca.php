<?php
	session_start();

	function __autoload($nombre_clase) {
    	include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
	}
	$descripcioTasca = $_POST['desc'];
	$dataInici = $_POST['dataInici'];
	$tipusTasca = $_POST['tipustasca'];

	$novaTasca = unserialize($_SESSION['empresa']);

	if ($descripcioTasca == "" || $dataInici == "") {
		header('Location: ../view/error/formulariBuit.html');
	} else {
		if (strlen($descripcioTasca) <=2 || strlen($descripcioTasca) >20) {
        	header('Location: ../view/error/crearTascaError2.html');
        //	Cal validar la data
        } else {
			$novaTasca->inserirTasca($codiTasca,$tipusTasca,$descripcioTasca,$dataInici);
			$_SESSION['empresa'] = serialize($novaTasca);
        	header('Location: ../view/tascaAfegidaCorrecte.html');
        }
	}
?>
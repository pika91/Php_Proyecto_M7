<?php
	session_start();

	function __autoload($nombre_clase) {
    	include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
	}

	$codiEntorn = $_POST['codi'];
	$descripcioEntorn = $_POST['desc'];
	
	$nouEntorn = unserialize($_SESSION['empresa']);

	if ($codiEntorn == "" || $descripcioEntorn == "") {
		header('Location: ../view/error/formulariBuit.html');
	} else {
		if (!is_numeric($codiEntorn)) {
			header('Location: ../view/error/crearTascaError1.html');
        } else if (strlen($descripcioEntorn) < 1) {
        	header('Location: ../view/error/crearTascaError2.html');
        
        } else {
			$nouEntorn->inserirEntorn($codiEntorn,$descripcioEntorn);
			$_SESSION['empresa'] = serialize($novaTasca);
        	header('Location: ../view/tascaAfegidaCorrecte.html');
        }
	}
?>
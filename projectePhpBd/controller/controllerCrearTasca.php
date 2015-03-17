<?php
	session_start();

	function __autoload($nombre_clase) {
    	include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
	}
	$descripcioTasca = $_POST['desc'];
	$dataInici = $_POST['dataInici'];

	$novaTasca = unserialize($_SESSION['empresa']);

	//Com que no estem segurs de com mostrar i seleccionar el valor de un tipus de tasca en un dropdown menu, crearem i utilitzarem un de testeig
	$tipusTascaTesting = $novaTasca->inserirTipusTasca(5,$descripcioTasca,$dataInici);

	if ($codiTasca == "" || $descripcioTasca == "" || $dataInici == "") {
		header('Location: ../view/error/formulariBuit.html');
	} else {
		if (!is_numeric($codiTasca)) {
			header('Location: ../view/error/crearTascaError1.html');
        } else if (strlen($descripcioTasca) <=2 || strlen($descripcioTasca) >20) {
        	header('Location: ../view/error/crearTascaError2.html');
        /*	Cal validar la data
        } else if (strlen($descripcioLlarga) <=16 || strlen($descripcioLlarga) >200) {
        	header('Location: ../view/error/crearProjecteError4.html');*/
        } else {
			$novaTasca->inserirTasca($codiTasca,$tipusTascaTesting,$descripcioTasca,$dataInici);
			$_SESSION['empresa'] = serialize($novaTasca);
        	header('Location: ../view/tascaAfegidaCorrecte.html');
        }
	}
?>
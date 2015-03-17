<?php
	session_start();

	function __autoload($nombre_clase) {
    	include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
	}
	
	$descripcioCurta = $_POST['descCurta'];
	$descripcioLlarga = $_POST['descLlarga']; 
	$entornId = $_POST['entornId'];
	
	$empresa = unserialize($_SESSION['empresa']);
	
	//Com que no estem segurs de com mostrar i seleccionar el valor de un entorn en un dropdown menu, crearem i utilitzarem un de testeig
	//$entornTesting = $nouProjecte->inserirEntorn(001,'descripcio Entorn');

	if ($descripcioCurta == "" || $descripcioLlarga == "") {
		header('Location: ../view/error/formulariBuit.html');
	} else {
		if (strlen($descripcioCurta) <=2 || strlen($descripcioCurta) >16) {
        	header('Location: ../view/error/crearProjecteError2.html');
        } else if (strlen($descripcioLlarga) <=16 || strlen($descripcioLlarga) >200) {
        	header('Location: ../view/error/crearProjecteError3.html');
        } else {
			$empresa->inserirProjecte($codiProjecte,$descripcioCurta,$descripcioLlarga,$entornId);
			$_SESSION['empresa'] = serialize($empresa);
        	header('Location: ../view/projecteAfegitCorrecte.html');
        }
	}
	
?>
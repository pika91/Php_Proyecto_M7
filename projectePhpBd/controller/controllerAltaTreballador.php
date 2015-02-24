<?php
	session_start();

	function __autoload($nombre_clase) {
    	include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
	}

	$NIF = $_POST['nif'];
	$nom = $_POST['nom'];
	$cognom = $_POST['cognom'];

	$nouTreballador = unserialize($_SESSION['empresa']);



	if ($NIF == "" || $nom == "" || $cognom == "") {
		header('Location: ../view/error/formulariBuit.html');
	} else {
		//Acabar validació correcte NIF --> Crear un mètode
		if (!is_numeric($NIF)) {
			header('Location: ../view/error/afegirTreballadorError1.html');
        } else if (strlen($nom) <=2 || strlen($nom) >20) {
        	header('Location: ../view/error/afegirTreballadorError2.html');
        } else if (strlen($cognom) <=2 || strlen($cognom) >20) {
        	header('Location: ../view/error/afegirTreballadorError3.html');
        } else {
        //Com que no estem segurs de com mostrar i seleccionar el valor de un tipus de treballador en un dropdown menu, utilitzarem 0 de testeig
        	// 0 = usuari normal, no admin
			$nouTreballador->inserirTreballador($NIF,$nom,$cognom,0);
			$_SESSION['empresa'] = serialize($nouTreballador);
        	header('Location: ../view/treballadorAfegitCorrecte.html');
        }
	}
?>
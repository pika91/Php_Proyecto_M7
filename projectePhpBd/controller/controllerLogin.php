<?php
session_start();

include "comprovarUsuari.php";
include "comprovarSessio.php";

//Comprova si s'han post usuari i password en el formulari. Si és així, crea una sessió d'aquest.
if (isset($_POST['user']) && isset($_POST['password'])) {
	$_SESSION['sessio'] = $_REQUEST['user'];
	$usuari = $_REQUEST['user'];
	$contrasenya = $_REQUEST['password'];
}

//Comprova si s'ha fet enviar al formulari (si s'ha fet la petició de login)
if (isset($_POST['enviar'])) {
	//Es comprova si existeix la sessió
	if(comprovarSessio()) {

		$treballador = new Treballador($usuari, $contrasenya);

		$treballador->consultaLogin();
		//Consulta la base de dades. Si existeix un usuari i password que coincideixin, entra en el if
		if() {
			//Si es vol guardar l'usuari en una cookie
			if(isset($_POST['guardaUser'])){				
            	setcookie("user", $_POST["user"], time()+3600,"/");     
        	} else {
            	setcookie("user", $_POST['user'], time(), "/");        
        	}

			//Si es vol guardar la password en una cookie
        	if(isset($_POST['guardaPwd'])){
           	 	setcookie("password", $_POST['password'], time()+3600, "/");               
        	} else {
            	setcookie("password", $_POST['password'], time(), "/");               
       		}

			if($treballador->getTipusTreballador() == 1)) {
				header("Location:../view/menuAdministrador.php");
			} else {
				header("Location:../view/menuTreballador.php");
			}

		} else {
			header("Location: ../view/error/loginError.html");
		}

	} else {
		header("Location:../index.php");
	}

//Si no s'ha fet la petició del formulari
} else {
	header("Location:../index.php");
}


?>
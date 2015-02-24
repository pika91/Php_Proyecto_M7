<?php
session_start();
include "comprovarLogin.php";
include "comprovarSessio.php";
if (isset($_POST['user']) && isset($_POST['password'])) {
	$_SESSION['sessio'] = $_REQUEST['user'];
	$usuari = $_REQUEST['user'];
	$contrasenya = $_REQUEST['password'];}
if (isset($_POST['enviar'])) {
	if(comprovarSessio()) {
		if(comprovarLogin($usuari, $contrasenya)) {
			if(isset($_POST['guardaUser'])){				
            	setcookie("user", $_POST["user"], time()+3600,"/");     
        	} else {
            	setcookie("user", $_POST['user'], time(), "/");        
        	}

        	if(isset($_POST['guardaPwd'])){
           	 	setcookie("password", $_POST['password'], time()+3600, "/");               
        	} else {
            	setcookie("password", $_POST['password'], time(), "/");               
       		}

			if($usuari == 'admin') {
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

} else {
	header("Location:../index.php");
}


?>
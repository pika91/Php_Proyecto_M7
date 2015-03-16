<?php
session_start();

require_once("../model/BussinessLayer/class_Usuari.php"); 

include "comprovarUsuari.php";
include "comprovarSessio.php";

//Comprova si s'han posat usuari i password en el formulari. Si és així, crea una sessió d'aquest.
if (isset($_POST['user']) && isset($_POST['password'])) {
	$_SESSION['sessio'] = $_REQUEST['user'];
	$usuari = $_REQUEST['user'];
	$contrasenya = $_REQUEST['password'];
}
<<<<<<< HEAD
	//Es comprova si existeix la sessió
	if(comprovarSessio()) {

		$usuari = new Usuari($usuari, $contrasenya);
		//Consulta la base de dades. Si existeix un usuari i password que coincideixin, entra en el if
		if($usuari->consultaLogin()) {

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

			header("Location:../view/menuAdministrador.php");

		} else {
			header("Location:../view/error/accessDenegat.html");
=======

//Comprova si s'ha fet enviar al formulari (si s'ha fet la petició de login)
if (isset($_POST['enviar'])) {
	if(isset($_POST['g-recaptcha-response'])){
		$captcha=$_POST['g-recaptcha-response'];
	}
	if(!$captcha){
		echo '<h2>Please check the the captcha form.</h2>';
		exit;
	}
	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	if($response.success==false)
	{
		echo '<h2>You are spammer ! Get the @$%K out</h2>';
	}else
	{
		//echo '<h2>Thanks for posting comment.</h2>';
	
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
>>>>>>> origin/NovaBranca
		}
	}
?>
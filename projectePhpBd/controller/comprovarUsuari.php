<?php
function comprovarLogin($usuariEscrit, $contrasenyaEscrita) {
	$user=$usuariEscrit;
	$password=$contrasenyaEscrita;
	$correcte = false;
	$user1 = "admin";
	$pass1 = "password";
	$user2 = "user";
	$pass2 = "123";
	if((($user==$user1) && ($password==$pass1)) || (($user==$user2) && ($password==$pass2))) {
		$correcte=true;
	}
	return $correcte;
}
?>
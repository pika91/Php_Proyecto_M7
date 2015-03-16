<?php
	function comprovarSessio() {
		if(isset($_SESSION['sessio'])) {
			return true;
		} else {
			header("Location:../view/login.php");
		}
	}
?>
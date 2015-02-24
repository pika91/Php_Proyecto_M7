<?php
	function comprovarSessio() {
		$existeixSessio = false;
		if(isset($_SESSION['sessio'])) {
			$existeixSessio = true;
		}
		return $existeixSessio;
	}
?>
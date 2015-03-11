<?php

	class Usuari {
		/*
		----------------------------------
		Data creació: Dimecres 11 - 03 - 2015
		Nota: n/a
		----------------------------------
		*/

		private $usuari = null;
		private $password = null;

		public function __construct($usuari, $password) {
			$this->usuari=$usuari;
			$this->password=$password;
		}

		public function getUsuari(){
			return $this->usuari;
		}

		public function setUsuari($usuari){
			$this->usuari= $usuari;
		}

		public function getPassword(){
			return $this->password;
		}

		public function setUsuari($password){
			$this->password= $password;
		}

		public function consultaLogin() {
			$treballadorDb = new treballadordb();
			return $treballadorDb->consultaUsuari($this);
		}

	}
?>
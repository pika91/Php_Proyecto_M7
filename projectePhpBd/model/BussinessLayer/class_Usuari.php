<?php
require_once("../model/DAO/class_usuaridb.php"); 

	class Usuari {
		/*
		----------------------------------
		Data creació: Dimecres 11 - 03 - 2015
		Nota: n/a
		----------------------------------
		*/
		private $idUsuari = null;
		private $usuari = null;
		private $password = null;

		public function __construct($usuari, $password) {
			$this->usuari=$usuari;
			$this->password=$password;
		}

		public function getIdUsuari(){
			return $this->idUsuari;
		}

		public function setIdUsuari($idUsuari){
			$this->idUsuari= $idUsuari;
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

		public function setPassword($password){
			$this->password= $password;
		}

		public function consultaLogin() {
			$usuariDb = new usuaridb();
			$consulta = $usuariDb->consultaUsuari($this);
			$row = mysql_fetch_array($consulta);
			//$count  = mysql_num_rows($usuariDb->consultaUsuari($this));
			if($row[0] == md5($this->getPassword())) {
				return true;
			} else {
				return false;
			}
		}

	}
?>
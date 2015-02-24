<?php
require_once("../model/DAO/class_entorndb.php");
	class Entorn {
		/*
		----------------------------------
		Data creació: Dimecres 3 - 12 - 2014
		Nota: -
		----------------------------------
		*/
		private $codiEntorn = null;
		private $descripcioEntorn = null;

		public function __construct($codiEntorn, $descripcioEntorn) {
			$this->codiEntorn=$codiEntorn;
			$this->descripcioEntorn=$descripcioEntorn;
		}

		public function getCodiEntorn(){
			return $this->codiEntorn;
		}

		public function setCodiEntorn($codiEntorn){
			$this->codiEntorn = $codiEntorn;
		}

		public function getDescripcioEntorn(){
			return $this->descripcioEntorn;
		}

		public function setDescripcioEntorn($descripcioEntorn){
			$this->descripcioEntorn = $descripcioEntorn;
		}

		public function afegirEntorn(){		
		$entornDB = new entorndb();
		$entornDB->inserir($this);		
		}

	}
?>
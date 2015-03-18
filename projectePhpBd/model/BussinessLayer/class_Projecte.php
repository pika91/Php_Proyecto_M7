<?php
require_once("../model/DAO/class_projectedb.php");
	class Projecte {

		/*
		----------------------------------
		Data creació: Dimecres 3 - 12 - 2014
		Nota: -
		----------------------------------
		*/
		private $codiProjecte = null;
		private $descripcioCurta = null;
		private $descripcioLlarga = null;
		private $entorn = null;

		public function __construct($descripcioCurta, $descripcioLlarga, $entorn) {
			$this->codiProjecte=$codiProjecte;
			$this->descripcioCurta=$descripcioCurta;
			$this->descripcioLlarga=$descripcioLlarga;
			$this->entorn=$entorn;
		}

		public function getCodiProjecte(){
			return $this->codiProjecte;
		}

		public function setCodiProjecte($codiProjecte){
			$this->codiProjecte = $codiProjecte;
		}

		public function getDescripcioCurta(){
			return $this->descripcioCurta;
		}

		public function setDescripcioCurta($descripcioCurta){
			$this->descripcioCurta = $descripcioCurta;
		}

		public function getDescripcioLlarga(){
			return $this->descripcioLlarga;
		}

		public function setDescripcioLlarga($descripcioLlarga){
			$this->descripcioLlarga = $descripcioLlarga;
		}

		public function getEntorn(){
			return $this->entorn;
		}

		public function setEntorn($entorn){
			$this->entorn = $entorn;
		}
		
		public function afegirProjecte(){		
			$projecteDb = new projectedb();
			$projecteDb->inserir($this);		
		}
	}
?>
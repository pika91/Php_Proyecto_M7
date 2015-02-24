<?php

	class TipusTreballador() {

	/*
		----------------------------------
		Data creació: Dimecres 3 - 12 - 2014
		Nota: S'ha creat una nova classe per a determinar el tipus de treballador (ID_Tipus i Descripció del tipus).
		Será necessari a la hora de poder seleccionar les diferents opcions quan es logueja un usuari.
		----------------------------------
	*/

		private $codiTreballador = null;
		private $descripcioTipusTreballador = null;

		public function __construct($codiTreballador, $descripcioTipusTreballador) {
			$this->setCodiTreballador($codiTreballador);
			$this->setDescripcioTipusTreballador($descripcioTipusTreballador);
		}

		public function getCodiTreballador(){
			return $this->codiTreballador;
		}

		public function setCodiTreballador($codiTreballador){
			$this->codiTreballador = $codiTreballador;
		}

		public function getDescripcioTipusTreballador(){
			return $this->descripcioTipusTreballador;
		}

		public function setDescripcioTipusTreballador($descripcioTipusTreballador){
			$this->descripcioTipusTreballador = $descripcioTipusTreballador;
		}

	}
?>
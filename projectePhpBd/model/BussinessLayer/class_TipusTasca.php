<?php

	class TipusTasca {
		/*
		----------------------------------
		Data creació: Dimecres 3 - 12 - 2014
		Nota: -
		----------------------------------
		*/
		private $codiTipusTasca = null;
		private $descripcioTipusTasca = null;

		public function __construct($codiTipusTasca, $descripcioTipusTasca) {
			$this->codiTipusTasca=$codiTipusTasca;
			$this->descripcioTipusTasca=$descripcioTipusTasca;
		}

		public function getCodiTipusTasca(){
			return $this->codiTipusTasca;
		}

		public function setCodiTipusTasca($codiTipusTasca){
			$this->codiTipusTasca = $codiTipusTasca;
		}

		public function getDescripcioTipusTasca(){
			return $this->descripcioTipusTasca;
		}

		public function setDescripcioTipusTasca($descripcioTipusTasca){
			$this->descripcioTipusTasca = $descripcioTipusTasca;
		}

	}
?>
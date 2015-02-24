<?php
	class Tasca {
		/*
		----------------------------------
		Data creació: Dimecres 3 - 12 - 2014
		Nota: -
		----------------------------------
		*/
		private $codiTasca = null;
		private $tipusTasca = null;
		private $descripcioTasca = null;
		private $dataInici = null;
		private $dataFinal = null;
		private $horesDedicades = null;

		public function __construct($codiTasca, $tipusTasca, $descripcioTasca, $dataInici) {
			$this->codiTasca=$codiTasca;
			$this->tipusTasca=$tipusTasca;
			$this->descripcio=$descripcioTasca;
			$this->dataInici=$dataInici;
		}

		public function getCodi(){
			return $this->codi;
		}

		public function setCodi($codi){
			$this->codi = $codi;
		}

		public function getTipus(){
			return $this->tipus;
		}

		public function setTipus($tipusTasca){
			$this->tipus = $tipusTasca;
		}

		public function getDescripcio(){
			return $this->descripcio;
		}

		public function setDescripcio($descripcioTasca){
			$this->descripcio = $descripcioTasca;
		}

		public function getDataInici(){
			return $this->dataInici;
		}

		public function setDataInici($dataInici){
			$this->dataInici = $dataInici;
		}

		public function getDataFinal(){
			return $this->dataFinal;
		}

		public function setDataFinal($dataFinal){
			$this->dataFinal = $dataFinal;
		}

		public function getHoresDedicades(){
			return $this->horesDedicades;
		}

		public function setHoresDedicades($horesDedicades){
			if (!is_int($horesDedicades)) {
	            throw new Exception('Has d\'introduir un numero (int) a les hores!!');
	        }
			$this->horesDedicades = $horesDedicades;
		}

	}
?>
<?php

	class Treballador {
		/*
		----------------------------------
		Data creació: Dimecres 3 - 12 - 2014
		Nota: Nova variable afegida $tipusTreballador per controlar si és administrador o un usuari-treballador
		Utilitzarem un numero per saber quin treballador és.
		0: Administrador
		1: Usuari normal, treballador.
		Si cal, anirem afegint més numeros segons els tipus de treballadors que hi puguin haver. Haurem de crear una nova classe.
		----------------------------------
		*/

		private $NIF = null;
		private $nom = null;
		private $cognom = null;
		private $tipusTreballador = null;

		public function __construct($NIF, $nom, $cognom, $tipusTreballador) {
			$this->NIF=$NIF;			
			$this->nom=$nom;
			$this->cognom=$cognom;
			$this->tipusTreballador=$tipusTreballador;
		}
		

		public function getNIF(){
			return $this->NIF;
		}

		public function setNIF($NIF){
			$this->NIF = $NIF;
		}

		public function getNom(){
			return $this->nom;
		}

		public function setNom($nom){
			$this->nom = $nom;
		}

		public function getCognom(){
			return $this->cognom;
		}

		public function setCognom($cognom){
			$this->cognom = $cognom;
		}

		public function getTipusTreballador(){
			return $this->tipusTreballador;
		}

		public function setTipusTreballador($tipusTreballador){
			$this->tipusTreballador = $tipusTreballador;
		}

	}
?>
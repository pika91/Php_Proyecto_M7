<?php
require_once("../model/DAO/class_empresadb.php");
require_once("../model/BussinessLayer/class_Empresa.php");

class Empresa {
		/*
		----------------------------------
		Data creació: Dilluns 8 - 12 - 2014
		Nota: s'han afegit els camps de fax i numTelefon respecte a l'esquema planificat.
		----------------------------------
		Modificació: Dimecres 17 - 12 - 2014
		Nota: s'han afegit projecte, treballador, tasca, tipusTasca, entornProjecte, els seus getters i setters. També
		s'ha afegit el populate i els inserirs de cadascú.
		----------------------------------
		*/
		private $CIF = null;
		private $nomEmpresa = null;
		private $adreca = null;
		private $fax = null;
		private $numTelefon = null;
		private $projecte = null;
		private $treballador = null;
		private $tasca = null;
		private $tipusTasca = null;
		private $entornProjecte = null;

		public function __construct($CIF, $nomEmpresa, $adreca, $fax, $numTelefon) {
			$this->CIF=$CIF;
			$this->nomEmpresa=$nomEmpresa;
			$this->adreca=$adreca;
			$this->fax=$fax;
			$this->numTelefon=$numTelefon;
			$this->projecte = array();
			$this->treballador = array();
			$this->tasca = array();
			$this->tipusTasca = array();
			$this->entornProjecte = array();
		}

		public function getCIF(){
			return $this->CIF;
		}

		public function setCIF($CIF){
			$this->CIF = $CIF;
		}

		public function getNomEmpresa(){
			return $this->nomEmpresa;
		}

		public function setNomEmpresa($nomEmpresa){
			$this->nomEmpresa = $nomEmpresa;
		}

		public function getAdreca(){
			return $this->adreca;
		}

		public function setAdreca($adreca){
			$this->adreca = $adreca;
		}

		public function getFax(){
			return $this->fax;
		}

		public function setFax($fax){
			$this->fax = $fax;
		}

		public function getNumTelefon(){
			return $this->numTelefon;
		}

		public function setNumTelefon($numTelefon){
			$this->numTelefon = $numTelefon;
		}

		public function getProjecte(){
			return $this->projecte;
		}

		public function setProjecte($projecte){
			$this->projecte = $projecte;
		}

		public function getTreballador(){
			return $this->treballador;
		}

		public function setTreballador($treballador){
			$this->treballador = $treballador;
		}

		public function getTasca(){
			return $this->tasca;
		}

		public function setTasca($tasca){
			$this->tasca = $tasca;
		}

		public function getTipusTasca(){
			return $this->tipusTasca;
		}

		public function setTipusTasca($tipusTasca){
			$this->tipusTasca = $tipusTasca;
		}

		public function getEntornProjecte(){
			return $this->entornProjecte;
		}

		public function setEntornProjecte($entornProjecte){
			$this->entornProjecte = $entornProjecte;
		}

		public function inserirProjecte($codiProjecte, $descripcioCurta, $descripcioLlarga, $entornProjecte) {
			$projecte = new Projecte($codiProjecte, $descripcioCurta, $descripcioLlarga, $entornProjecte);
			//array_push($this->projecte, $projecte);
			$projecte->afegirProjecte();
		}

		public function inserirTreballador($NIF, $nom, $cognom, $tipusTreballador, $usuari, $password) {
			$treballador = new Treballador($NIF, $nom, $cognom, $tipusTreballador, $usuari, $password);
			array_push($this->treballador, $treballador);
		}

		public function inserirTasca($tipusTasca, $descripcioTasca, $dataInici) {
			$tasca = new Tasca($tipusTasca, $descripcioTasca, $dataInici);
			$tasca->afegirTasca();
			//array_push($this->tasca, $tasca);
		}

		public function inserirTipusTasca($codiTipusTasca, $descripcioTipusTasca) {
			$tipusTasca = new TipusTasca($codiTipusTasca, $descripcioTipusTasca);
			$tipusTasca->afegirTipusTasca();
			//array_push($this->tipusTasca, $tipusTasca);
		}

		public function inserirEntorn($codiEntorn, $descripcioEntorn) {
			$entorn = new Entorn($codiEntorn, $descripcioEntorn);
			//array_push($this->entornProjecte, $entorn);
			$entorn->afegirEntorn();
		}

		public function populateEmpresa() {
			$resultat;
			
			/*Populate projectes*/
			$projectes = new empresadb();
			$resultat = $projectes->llistarProjectes();
			$cont = 0;
			
			while($row = mysql_fetch_array($resultat)) {
				$projecte = new Projecte ($row['id'] , $row['descrCurta'] , $row['descrLlarga'] , $row['entorn_id']);
				array_push($this->projecte, $projecte);								
			}

			/*Populate entorn*/
			$entorns = new empresadb();
			$resultat = $entorns->llistarEntorns();
			$cont = 0;
			
			while($row = mysql_fetch_array($resultat)) {
				$entorn = new Entorn ($row['id'] , $row['descripcio']);
				array_push($this->entornProjecte, $entorn);								
			}

		}

	}
?>
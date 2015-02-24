<?php
require_once("../model/DAO/class_db.php");
require_once("../model/DAO/class_db.php");
require_once("../config/db.inc.php");
class empresadb{

	public function llistarProjectes() {		
		$resultat; 
		$query="select * from projecte;";	
		$con = new class_db();
		$resultat = $con->consulta($query, $GLOBALS['bd']);
		$con->close();


		return $resultat;
	}
	public function llistarEntorns() {		
		$resultat; 
		$query="select * from entorn;";	
		$con = new class_db();
		$resultat = $con->consulta($query, $GLOBALS['bd']);
		$con->close();


		return $resultat;
	} 
}    
 ?>

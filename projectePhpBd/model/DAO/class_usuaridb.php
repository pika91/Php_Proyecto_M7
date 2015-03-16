<?php
require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");
class usuaridb{

	public function inserir($usuari) {		
	
		$query="insert into usuari values('".$usuari->getUsuari()."', '".md5($usuari->getPassword())."');";	
		$con = new class_db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 

	public function consultaUsuari($usuari) {
		$query = "SELECT pass FROM usuari WHERE usuari = '".$usuari->getUsuari()."' AND pass = '".md5($usuari->getPassword())."';";
		$con = new class_db();
		$result = $con->consulta($query, $GLOBALS['bd']);
		$con->close();
		return $result;
	}

}    
?>
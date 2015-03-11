<?php
require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");
class treballadordb{

	public function inserir($treballador) {		
	
		$query="insert into treballador values('".$treballador->getNIF()."', '".$treballador->getNom()."', '".$treballador->getCognom()."', '".$treballador->getTipusTreballador()."', ".$treballador->getUsuari()."', '".md5($treballador->getPassword())."');";	
		$con = new class_db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 

	public function consultaUsuari($treballador) {
		$query = "SELECT * FROM treballador WHERE user = ".$treballador->getNom()." AND password = "md5($treballador->getPassword())";";
		$con = new class_db();
		$result = $con->consulta($query, $GLOBALS['bd']);
		$con->close();
		return 
	}

}    
?>
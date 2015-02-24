<?php
require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");
class projectedb{

	public function inserir($projecte) {		
	
		$query="insert into projecte values('', '".$projecte->getEntorn()."', '".$projecte->getDescripcioLlarga()."', '".$projecte->getDescripcioCurta()."');";				
		$con = new class_db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 
}    
 ?>

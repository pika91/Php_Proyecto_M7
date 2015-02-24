<?php
require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");
class entorndb{

	public function inserir($entorn) {		
	
		$query="insert into entorn values('', '".$entorn->getDescripcioEntorn()."');";				
		$con = new class_db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 
}    
 ?>

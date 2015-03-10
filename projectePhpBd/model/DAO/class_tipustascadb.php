<?php
require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");
class tipustascadb{

	public function inserir($tipustasca) {		
	
		$query="insert into tipustasca values('', '".$tipustasca->getCodiTipusTasca()."', '".$tipustasca->getDescripcioTipusTasca()."');";				
		$con = new class_db();
		$con->consulta($query, $GLOBALS['bd']);
		$con->close();
	} 
}    
 ?>

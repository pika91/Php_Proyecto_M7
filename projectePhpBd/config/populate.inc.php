<?php

	function __autoload($class_name) {
      require_once("../model/BussinessLayer/class_" . $class_name . ".php"); 
  }
    
  $objecteEntorn = new Empresa('0',"Aidet","Carrer pedres blanques", "969626325", "954623014");
  $objecteEntorn->populateEmpresa();
  $_SESSION['empresa'] = serialize($objecteEntorn);

?>
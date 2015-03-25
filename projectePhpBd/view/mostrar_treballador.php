<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	<title>Gestió Projectes  - Administrador</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!--external css-->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
  	<?php
  	session_start();

  	include "../controller/comprovarSessio.php";
  	include "../model/BussinessLayer/class_Empresa.php";
    //include "../config/populate.inc.php";
  	include "../model/BussinessLayer/class_Projecte.php";
  	require_once('Structures/DataGrid.php');
  	if(comprovarSessio()){
  		?>

  		<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <?php include "topBar.html"; ?>
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <?php include "aside.html"; ?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
      	<section class="wrapper site-min-height">
      		<h3><i class="fa fa-angle-right"></i> Modificar Projectes</h3>
      		<div class="row mt">
      			<div class="col-lg-12">
      			<?php
      				class Printer {
      					function printLink($params)
      					{
      						extract($params);
      						$id = $record['id'];

      						return "<a href=\"edit_user.php?id=$id\">$label</a>";
      					}
      				}

      				$empresa = unserialize($_SESSION['empresa']);
      				$projectos = $empresa->getProjecte();
      				$rs;

      				foreach ($projectos as $value) {
      					$projecto = array('id'=>$value->getCodiProjecte(),'first_name'=>$value->getDescripcioCurta(),'last_name' =>$value->getDescripcioLlarga(),'age' =>$value->getEntorn());
      					$rs[]= $projecto;
      				}

					// Define New DataGrid with a limit 
      				$dg =& new Structures_DataGrid(5);

					// Define DataGrid Color Attributes
      				$dg->renderer->setTableHeaderAttributes(array('bgcolor' => '#3399FF'));
      				$dg->renderer->setTableOddRowAttributes(array('bgcolor' => '#CCCCCC'));
      				$dg->renderer->setTableEvenRowAttributes(array('bgcolor' => '#EEEEEE'));

					// Define DataGrid Table Attributes
      				$dg->renderer->setTableAttribute('width', '50%');
      				$dg->renderer->setTableAttribute('cellspacing', '1');
      				$dg->renderer->setTableAttribute('cellpadding', '4');
      				$dg->renderer->setTableAttribute('class', 'datagrid');

      				$dg->renderer->sortIconASC = "&uArr;";
      				$dg->renderer->sortIconDESC = "&dArr;";

					// Set empty row table attributes
      				$dg->renderer->allowEmptyRows(true, array('bgcolor' => '#FFFFFF'));

					// Define columns for the DataGrid
      				$column = new Structures_DataGrid_Column('Descripcio Curta', 'first_name', 'first_name', array('width' => '75%'));
      				$dg->addColumn($column);
      				$column = new Structures_DataGrid_Column('Id Entorn', 'age', 'age', array('width' => '25%'));
      				$dg->addColumn($column);
      				$column = new Structures_DataGrid_Column('Edit', null, null, array('align' => 'center'), null, 'Printer::printLink($label=Edit)');
      				$dg->addColumn($column);
      				$column = new Structures_DataGrid_Column('Delete', null, null, array('align' => 'center'));
      				$dg->addColumn($column);

					// Option #3 Bind directly to any data type
      				$dg->bind($rs);

					// Print the DataGrid
      				$dg->render();
      				echo $dg->renderer->getPaging();
      				?>
      			</div>
      		</div>

      	</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
      	<div class="text-center">
      		Gestio de projectes
      		<a href="menuAdministrador.php" class="go-top">
      			<i class="fa fa-angle-up"></i>
      		</a>
      	</div>    </footer>
      	<!--footer end-->
      </section>

      <!-- js placed at the end of the document so the pages load faster -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
      <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
      <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
      <script src="assets/js/jquery.scrollTo.min.js"></script>
      <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


      <!--common script for all pages-->
      <script src="assets/js/common-scripts.js"></script>

      <!--script for this page-->

      <script>
      //custom select box

      $(function(){
      	$('select.styled').customSelect();
      });

  </script>
  <!-- Si no te acces a la pagina el redirigim -->
  <?php
  
}
?>

</body>
</html>

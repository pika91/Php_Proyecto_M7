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
	<!-- calendar stylesheet -->
	<link rel="stylesheet" type="text/css" media="all" href="js/jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
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

  	$fitxer = basename($_SERVER['PHP_SELF']);
      $pieces = explode( "_", $fitxer);  // 2012 substitució de la funció obsoleta split per explode
      $accio = $pieces[0];

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
      		<h3><i class="fa fa-angle-right"></i> Crear nou Tasca</h3>
      		<div class="row mt">
      			<div class="col-lg-12">
      				<form name="form" method="post" action="../controller/controllerCrearTasca.php"/>
      				Tipus Tasca <br/>
      				Descripcio tasca <input type="text" name="desc" required/><br/>
      				Data inici <input type="text" name="dataInici" id="data1"> <button type="reset" id="boto1">...</button><br/>
      				<input type="submit" value="Crear tasca" name="crearTasca"/>
      			</form>      			
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
  	</div>
  </footer>
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
<script type="text/javascript" src="js/confirmar_Sortida.js"></script>
<!-- main calendar program -->
<script type="text/javascript" src="js/jscalendar/calendar.js"></script>
<!-- language for the calendar -->
<script type="text/javascript" src="js/jscalendar/lang/calendar-en.js"></script>
<!-- the following script defines the Calendar.setup helper function, which makes
	adding a calendar a matter of 1 or 2 lines of code. -->
<script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script> 

<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->

<script>
      //custom select box

      $(function(){
      	$('select.styled').customSelect();
      });

  </script>

  <script type="text/javascript">
      				Calendar.setup({
        inputField     :    "data1",      // id of the input field
        ifFormat       :    "%d-%m-%Y",   // format of the input field
        showsTime      :    false,         // will display a time selector
        button         :    "boto1",      // trigger for the calendar (button ID)
        singleClick    :    false,        // double-click mode
        step           :    1             // show all years in drop-down boxes (instead of every other year as default)
    });
      			</script> 
  <?php
	}
?>

</body>
</html>
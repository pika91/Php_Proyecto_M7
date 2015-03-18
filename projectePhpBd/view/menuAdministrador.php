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

      include "../config/populate.inc.php";
      include "../controller/comprovarSessio.php";
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
         <h3><i class="fa fa-angle-right"></i> Benvingut</h3>
         <div class="row mt">
          <div class="col-lg-12">
            <p>Projectes Actius</p>
            <?php    
            $projectes = unserialize($_SESSION['empresa']);
            $projecte = $projectes->getProjecte();
            $entorn = $projectes->getEntornProjecte();
            ?>
            <table border='1' cellpadding='2' cellspacing='2'>
              <tr>
                <td>Id</td>
                <td>Descripció curta</td>
                <td>Descripció llarga</td>
                <td>Entorn id</td>
              </tr>
            <?php
              foreach ($projecte as $value) {                       
            ?>            
              <tr>
                <td> <?php echo $value->getCodiProjecte(); ?></td>
                <td> <?php echo $value->getDescripcioCurta();?></td>
                <td> <?php echo $value->getDescripcioLlarga();?></td>
                <td> <?php echo $value->getEntorn();?></td>
              </tr>
            <?php  
            }
            ?>            
            </table><br>
            <a href="imprimirProjectes.php"><button>Imprimir PDF de projectes</button></a>
            <p>Entorns Actius</p>
            <table border='1' cellpadding='2' cellspacing='2'>
              <tr>
                <td>Id</td>
                <td>Descripció</td>
                
              </tr>
            <?php
              foreach ($entorn as $value) {                       
            ?>            
              <tr>
                <td> <?php echo $value->getCodiEntorn(); ?></td>
                <td> <?php echo $value->getDescripcioEntorn();?></td>
              </tr>
            <?php  
            }
            ?>
            </table>
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
    $_SESSION['empresa'] = serialize($projectes);
  }
  ?>

</body>
</html>

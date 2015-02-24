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
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
      <?php
      session_start();

      function __autoload($class_name) {
      //include 'model/BussinessLayer/class_'.$nombre_clase.'.php';
        require_once("../model/BussinessLayer/class_" . $class_name . ".php"); 
      }
      $projectes = unserialize($_SESSION['empresa']);
      $entorn = $projectes->getEntornProjecte();

      include "../controller/comprovarSessio.php";
      if(comprovarSessio()){
        ?>

        <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>GESTIO DE PROJECTES</b></a>
        <!--logo end-->
        <div class="top-menu">
         <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">

           <p class="centered"><a href="profile.html"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
           <h5 class="centered">Administrador</h5>

           <li class="mt">
            <a href="administrador1.php">
              <i class="fa fa-dashboard"></i>
              <span>Panell de control</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>Tasques</span>
            </a>
            <ul class="sub">
              <li><a  href="crearTasca.php">Crear Tasca</a></li>
              <li><a  href="buttons.html">Modificar Tasca</a></li>
              <li><a  href="panels.html">Agregar Tasca</a></li>
              <li><a  href="panels.html">Agregar Tasca</a></li>
              <li><a  href="panels.html">Agregar Tasca</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-cogs"></i>
              <span>Projectes</span>
            </a>
            <ul class="sub">
              <li><a  href="crearProjecte.php">Crear Projecte</a></li>
              <li><a  href="gallery.html">Modificar Projecte</a></li>
              <li><a  href="crearEntorn.php">Crear Entotrn </a></li>
              <li><a  href="todo_list.html">Modificar Entotrn </a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;" >
              <i class="fa fa-book"></i>
              <span>Usuari</span>
            </a>
            <ul class="sub">
              <li><a  href="login.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
         <h3><i class="fa fa-angle-right"></i> Benvingut</h3>
         <div class="row mt">
          <div class="col-lg-12">
            <p>Crear Projecte </p>
            <form name="form" method="post" action="../controller/controllerCrearProjecte.php"/>
              Codi del projecte <input type="text" name="codi" required/><br/>
              Descripcio curta <input type="text" name="descCurta" required/><br/>
              Descripcio llarga <textarea name="descLlarga" rows="5" cols="20" required></textarea><br/>
              Entorn : 
            <select name="entornId">
              <?php
              foreach ($entorn as $value) {                       
                ?>            
                <option value="<?php echo $value->getCodiEntorn(); ?>" selected="selected"><?php echo $value->getDescripcioEntorn();?></option>
                <?php  
              }
              ?>
            </select>
            <br>    

            <input type="submit" value="Crear projecte" name="crearProjecte"/>
          </form>

        </div>
      </div>

    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->

  <!--main content end-->
  <!--footer start-->
  <footer class="site-footer">
    <div class="text-center">
      Gestio de projectes
      <a href="administrador1.php" class="go-top">
        <i class="fa fa-angle-up"></i>
      </a>
    </div>
  </footer>
  <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="../assets/js/common-scripts.js"></script>

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
  } else {

    header('Location: ./error/accessDenegat.html');

  }
  ?>

</body>
</html>

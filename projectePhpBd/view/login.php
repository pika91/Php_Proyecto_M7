<!DOCTYPE html>
<?php

  session_start();

  $user="";
  $password="";
  $guardaUser="";
  $guardaPwd="";


  if(isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
    $guardaUser = "checked";
  }
  
  if (isset($_COOKIE['password'])){
    $password = $_COOKIE['password'];
    $guardaPwd = "checked";
  }

  function __autoload($class_name) {
      //include 'model/BussinessLayer/class_'.$nombre_clase.'.php';
      require_once("../model/BussinessLayer/class_" . $class_name . ".php"); 
  }

  //require_once("../model/BussinessLayer/class_Empresa.php");

  
  $objecteEntorn = new Empresa('0',"Aidet","Carrer pedres blanques", "969626325", "954623014");
  $objecteEntorn->populateEmpresa();
  $_SESSION['empresa'] = serialize($objecteEntorn);
  


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login - Gestio de projectes</title>

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

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="../controller/controllerLogin.php" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" name="user" class="form-control" placeholder="User ID" value="<?php echo $user ?>" required autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
                <input type="checkbox" name="guardaUser" value="checked" <?php print $guardaUser; ?>> Guardar nom usuari<br/>
                <input type="checkbox" name="guardaPwd" value="checked" <?php print $guardaPwd; ?>> Guardar contrasenya<br/>
                <input type="submit" value="Log-in" name="enviar"/>		            
                <hr>
		            	            
				</div>
			    		   
		    </form>	  	
	  	
	  	</div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../assets/img/login-bg.png", {speed: 500});
    </script>


  </body>
</html>
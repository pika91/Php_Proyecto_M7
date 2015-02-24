<html>
<head>
<meta charset="UTF-8"> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
	session_start();
	include "../controller/comprovarSessio.php";
	if(comprovarSessio()){
		?>
	<div id="header">
		<h1>Gestió de projectes</h1>
	</div>
	<div class="container">
		<div class ="container">
		<form name="form" method="get" action="../controller/controller.php"/>
			<button type="submit" class="btn btn-danger">Registrar hores</button>
			<button type="submit" class="btn btn-default">Consultar tasca</button>
			<button type="submit" class="btn btn-default">Consultar perfil</button>
			<button type="submit" class="btn btn-default">Consultar projecte</button>
			<a class="btn btn-default" href="logout.php">Log out</a>
		</form>
		</div>
	</div>
	<?php
	} else {
		?>
			<h2>Accés denegat</h2>
			<a href="../index.php">Tornar a l'index</a>
<?php
	}
?>
</body>
</html>
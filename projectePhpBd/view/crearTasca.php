<?php

	session_start();

?>

<html>
<head>
</head>
<body>
	<form name="form" method="post" action="../controller/controllerCrearTasca.php"/>
		Codi Tasca <input type="text" name="codi" required/><br/>
		Tipus Tasca <br/>
		Descripcio tasca <input type="text" name="desc" required/><br/>
		Data inici <input type="text" name="dataInici" required/><br/>
		<input type="submit" value="Crear tasca" name="crearTasca"/>
	</form>
</body>
</html>
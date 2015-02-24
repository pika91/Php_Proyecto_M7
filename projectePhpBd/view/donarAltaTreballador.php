<?php

	session_start();

?>

<html>
<head>
</head>
<body>
	<form name="form" method="post" action="../controller/controllerAltaTreballador.php"/>
		NIF<input type="text" name="nif" required/><br/>
		Nom<input type="text" name="nom" required/><br/>
		Cognom <input type="text" name="cognom" required/><br/>
		Tipus treballador <br/>
		<input type="submit" value="Donar alta treballador" name="altaTreballador"/>
	</form>
</body>
</html>
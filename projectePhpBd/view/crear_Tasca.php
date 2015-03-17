<?php

session_start();

?>

<html>
<head>
	<!-- calendar stylesheet -->
	<link rel="stylesheet" type="text/css" media="all" href="js/jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />

	<!-- main calendar program -->
	<script type="text/javascript" src="js/jscalendar/calendar.js"></script>

	<!-- language for the calendar -->
	<script type="text/javascript" src="js/jscalendar/lang/calendar-en.js"></script>

  <!-- the following script defines the Calendar.setup helper function, which makes
  adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script> 
</head>
<body>
	<form name="form" method="post" action="../controller/controllerCrearTasca.php"/>
	Tipus Tasca <br/>
	Descripcio tasca <input type="text" name="desc" required/><br/>
	Data inici <input type="text" name="dataInici" id="data1"> <button type="reset" id="boto1">...</button><br/>
	<input type="submit" value="Crear tasca" name="crearTasca"/>
</form>

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

</body>
</html>
<?php 

	$dbserver = "";
	$dbuser = "";
	$dbpass = "";
	$dbname = "";

	mysql_connect("$dbserver", "$dbuser", "$dbpass");

	mysql_select_db("$dbname");

	$name			= $_POST['app-name'];
	$age			= $_POST['app-age'];
	$btag			= $_POST['app-btag'];

	$armory			= $_POST['app-armory'];
	$mspec			= $_POST['app-ms'];
	$ospec			= $_POST['app-os'];
	$loglink		= $_POST['app-logs'];

	$pcspec			= $_POST['app-specs'];
	$internetspec	= $_POST['app-internet'];
	$uiss			= $_POST['app-ui'];

	$submitapp = mysql_query ("
		INSERT INTO beapps 
		(name, age, btag, armory, mspec, ospec, loglink, pcspec, internetspec, uiss) 
		VALUES ('$name','$age','$btag','$armory','$mspec','$ospec','$loglink','$pcspec','$internetspec','$uiss')
		");

	if ($submitapp) {
		echo "It probably worked?";

	} else {

		echo "It probably fucked up";
	};

?>

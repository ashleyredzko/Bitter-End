<?php 
	require('admin/functions.php');
	$dbsql = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname")

	if ($dbsql->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$name			= $dbsql->real_escape_string($_POST['app-name']);
	$age			= $dbsql->real_escape_string($_POST['app-age']);
	$btag			= $dbsql->real_escape_string($_POST['app-btag']);

	$armory			= $dbsql->real_escape_string($_POST['app-armory']);
	$mspec			= $dbsql->real_escape_string($_POST['app-ms']);
	$ospec			= $dbsql->real_escape_string($_POST['app-os']);
	$loglink		= $dbsql->real_escape_string($_POST['app-logs']);

	$pcspec			= $dbsql->real_escape_string($_POST['app-specs']);
	$internetspec	= $dbsql->real_escape_string($_POST['app-internet']);
	$uiss			= $dbsql->real_escape_string($_POST['app-ui']);

	$submitapp = $dbsql->query("
		INSERT INTO beapps 
		(name, age, btag, armory, mspec, ospec, loglink, pcspec, internetspec, uiss) 
		VALUES ('$name','$age','$btag','$armory','$mspec','$ospec','$loglink','$pcspec','$internetspec','$uiss')
		");

	if ($submitapp) {
		echo "Application successfully submitted.";
	} else {
		printf("Error: %s\n", $dbsql->error);
	};

	$submitapp->close();
	$dbsql->close();

?>

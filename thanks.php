<?php 
	require('admin/functions.php');
	$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	};

	$name			= $conn->real_escape_string($_POST['app-name']);
	$age			= $conn->real_escape_string($_POST['app-age']);
	$btag			= $conn->real_escape_string($_POST['app-btag']);

	$armory			= $conn->real_escape_string($_POST['app-armory']);
	$mspec			= $conn->real_escape_string($_POST['app-ms']);
	$ospec			= $conn->real_escape_string($_POST['app-os']);
	$loglink		= $conn->real_escape_string($_POST['app-logs']);

	$pcspec			= $conn->real_escape_string($_POST['app-specs']);
	$internetspec	= $conn->real_escape_string($_POST['app-internet']);
	$uiss			= $conn->real_escape_string($_POST['app-ui']);

	$submitapp = $conn->query("
		INSERT INTO be_applications 
		(name, age, btag, armory, ms, os, logs, pcspecs, speed, ui) 
		VALUES ('$name','$age','$btag','$armory','$mspec','$ospec','$loglink','$pcspec','$internetspec','$uiss')
		");

	if ($submitapp) {
		echo "Application successfully submitted.";
	} else {
		printf("Error: %s\n", $conn->error);
	};

	$submitapp->close();
	$conn->close();

?>

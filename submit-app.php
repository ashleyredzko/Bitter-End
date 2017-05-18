<?php 
	require('admin/functions.php');
	require('header.php');
	require('highlight.php');
	require('sidebar.php');
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

?>

		<div class="col-md-9 be-news">
			<div class="news-content">
				<?php
					if ($submitapp) {
						echo "<p>Application successfully submitted.</p><p>You can expect to hear from us within 48 hours.</p>";
					} else {
						printf("<p>Error: %s\n</p>", $conn->error);
					};

					$conn->close();
				?>
				<a href='/index.php' class="btn btn-primary">Return to Home</a>
			</div>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>

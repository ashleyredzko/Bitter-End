<?php 
	require('admin/functions.php');
	require('header.php');
	require('highlight.php');
	require('sidebar.php');
	$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	};

	$name			= $conn->real_escape_string($_POST['ct-name']);
	$email			= $conn->real_escape_string($_POST['ct-btagemail']);
	$about			= $conn->real_escape_string($_POST['ct-about']);
	$msg			= $conn->real_escape_string($_POST['ct-msg']);

	$submitapp = $conn->query("
		INSERT INTO be_contact 
		(name, email, about, msg) 
		VALUES ('$name','$email','$about','$msg')
		");

?>

		<div class="col-md-9 be-news">
			<div class="news-content">
				<?php
					if ($submitapp) {
						echo "<p>Thank you for your message.</p><p>You can expect to hear from us within 48 hours.</p>";
					} else {
						printf("<p>Error: %s\n</p>", $conn->error);
					};

					$conn->close();
				?>
			</div>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>


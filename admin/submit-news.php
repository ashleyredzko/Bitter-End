<?php 
	require('functions.php');
	require('../header.php');
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		};

		$title			= $conn->real_escape_string($_POST['news-title']);
		$name			= $conn->real_escape_string($_POST['news-name']);
		$body			= $conn->real_escape_string($_POST['news-body']);

		$submitapp = $conn->query("
			INSERT INTO be_news 
			(title, author, body) 
			VALUES ('$title','$name','$body')
			");
	}

?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-offset-md-3 be-news">
			<div class="news-content">
				<?php
					if ($_SERVER['REQUEST_METHOD'] === 'POST') {
						if ($submitapp) {
							echo "<p>News submitted successfully.</p>";
						} else {
							printf("<p>Error: %s\n</p>", $conn->error);
						};

						$conn->close();
					}
				?>
				<a href='/admin' class="btn btn-primary">Return to Administration</a>
			</div>
		</div>
	</div>
</div>

<?php
	require('../footer.php');
?>

<?php 
	require('functions.php');
	require('aheader.php');
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

?>

		<div class="col-md-9 be-news">
			<div class="news-content">
				<?php
					if ($submitapp) {
						echo "<p>News submitted successfully.</p>";
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

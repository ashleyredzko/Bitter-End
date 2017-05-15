<?php 
	require('functions.php');
	require('../header.php');
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		};

		$dk 		= $conn->real_escape_string($_POST['dk-recruitment']);
		$dh 		= $conn->real_escape_string($_POST['dh-recruitment']);
		$druid 		= $conn->real_escape_string($_POST['druid-recruitment']);
		$hunter 	= $conn->real_escape_string($_POST['hunter-recruitment']);
		$mage 		= $conn->real_escape_string($_POST['mage-recruitment']);
		$monk 		= $conn->real_escape_string($_POST['monk-recruitment']);
		$paladin 	= $conn->real_escape_string($_POST['paladin-recruitment']);
		$priest 	= $conn->real_escape_string($_POST['priest-recruitment']);
		$rogue 		= $conn->real_escape_string($_POST['rogue-recruitment']);
		$shaman 	= $conn->real_escape_string($_POST['shaman-recruitment']);
		$warlock 	= $conn->real_escape_string($_POST['warlock-recruitment']);
		$warrior 	= $conn->real_escape_string($_POST['warrior-recruitment']);

		$updateRecruitment = $conn->query("
			UPDATE be_recruitment
			SET status = CASE class
				WHEN 'dk' THEN '$dk'
				WHEN 'dh' THEN '$dh'
				WHEN 'druid' then '$druid'
				WHEN 'hunter' then '$hunter'
				WHEN 'mage' then '$mage'
				WHEN 'monk' then '$monk'
				WHEN 'paladin' then '$paladin'
				WHEN 'priest' then '$priest'
				WHEN 'rogue' then '$rogue'
				WHEN 'shaman' then '$shaman'
				WHEN 'warlock' then '$warlock'
				WHEN 'warrior' then '$warrior'
			END
		");
	}
?>
<div class="container">
	<div class="row">
		<div class="col-md-9 be-news">
			<div class="news-content">
				<?php
					if ($_SERVER['REQUEST_METHOD'] === 'POST') {
						if ($updateRecruitment) {
							echo "<p>Recruitment updated successfully.</p>";
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

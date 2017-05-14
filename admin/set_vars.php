<?php
	$dbserver = "";
    $dbuser = "";
    $dbpass = "";
    $dbname = "";

	$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	};

	$recruitment_query = "SELECT * FROM be_recruitment WHERE status IS NOT NULL";
	$recruitment_result = $conn->query($recruitment_query);

	$recruitment = array();

	while ($row = $recruitment_result->fetch_assoc()) {
		array_push(
			$recruitment,
			array(
				'class' => $row['class'],
				'status' => $row['status'],
				'name' => $row['class_name']
			)
		);
	}

	$news_query = "SELECT * FROM be_news ORDER BY id DESC LIMIT 6";
	$news_result = $conn->query($news_query);

	$news = array();

	while ($row = $news_result->fetch_assoc()) {
		array_push(
			$news,
			array(
				'title' => $row['title'],
				'author' => $row['author'],
				'time' => $row['time'],
				'body' => $row['body']
			)
		);
	}

	$conn->close();

	// Set progression variables
	// 0 = alive, 1 = normal, 2 = heroic, 3 = mythic
	// ToS
	$prog_tos_goroth 		= "";
	$prog_tos_demon 		= "";
	$prog_tos_harjatan 		= "";
	$prog_tos_sisters 		= "";
	$prog_tos_mistress 		= "";
	$prog_tos_host 			= "";
	$prog_tos_maiden 		= "";
	$prog_tos_avatar 		= "";
	$prog_tos_kiljaeden 	= "";
	// Nighthold
	$prog_nh_skorp 			= "";
	$prog_nh_chrono 		= "";
	$prog_nh_trilliax 		= "";
	$prog_nh_spellblade 	= "";
	$prog_nh_tich 			= "";
	$prog_nh_krosus			= "";
	$prog_nh_bot 			= "";
	$prog_nh_star			= "";
	$prog_nh_elisande 		= "";
	$prog_nh_guldan 		= "";
	// ToV
	$prog_tov_Odyn 			= "";
	$prog_tov_Guarm 		= "";
	$prog_tov_Helya 		= "";
	// EN
	$prog_en_nyth 			= "";
	$prog_en_ilgy 			= "";
	$prog_en_elerethe 		= "";
	$prog_en_ursoc 			= "";
	$prog_en_dragons 		= "";
	$prog_en_cenarius 		= "";
	$prog_en_xavius 		= "";
?>
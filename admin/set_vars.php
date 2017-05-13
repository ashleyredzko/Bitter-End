<?php

	$dbserver = "";
	$dbuser = "";
	$dbpass = "";
	$dbname = "";

	$conn = new mysqli("$dbserver", "$dbuser", "$dbpass", "$dbname");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	};

	$query_dk 		= "SELECT status FROM be_recruitment WHERE class = 'class_dk' ";
		$result_dk = $conn->query($query_dk);
		echo $result_dk->fetch_assoc()["status"];

	$conn->close();


	// Set class recruitment variables
	$rec_stat_dk 			= $result_dk->fetch_assoc()["status"];
	$rec_stat_dh 			= "";
	$rec_stat_druid 		= "";
	$rec_stat_hunter 		= "";
	$rec_stat_mage 			= "";
	$rec_stat_monk 			= "";
	$rec_stat_paladin 		= "";
	$rec_stat_priest 		= "";
	$rec_stat_rogue 		= "";
	$rec_stat_shaman 		= "";
	$rec_stat_warlock 		= "";
	$rec_stat_warrior 		= "";
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
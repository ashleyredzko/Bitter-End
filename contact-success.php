<?php 

	$name		= $_POST['ct-name'];
	$reply		= $_POST['ct-btagemail'];
	$about		= $_POST['ct-about'];
	$msg		= $_POST['ct-msg'];

	$to			= "";
	$subject	= "Bitter End mail from: $name regarding $about";
	$body		= "$name has sent an email from the guild website.\n\nTheir information:\n\nName: $name\nEmail/BTag: $reply\nReason for contacting: $about\n\nTheir message:\n$msg";

	mail($to,$subject,$body);

?>

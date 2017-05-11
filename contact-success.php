<?php 

	$name		= $_POST['ct-name'];
	$reply		= $_POST['ct-btagemail'];
	$about		= $_POST['ct-about'];
	$msg		= $_POST['ct-msg'];

	$to			= "";
	$subject	= "";
	$body		= "";

	mail($to,$subject,$body);

?>

	
<?php
	session_start();
	include("class.user.php");
	
	$user = new User;
	
	$user->user_logout();
	header('Location: index.php');
	

?>
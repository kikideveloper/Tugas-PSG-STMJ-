<?php 
	include 'lib/javaSc.php';
	// print_r($_SESSION);
	session_start();
	// session_destroy();
	if ($_SESSION['user']!="") {
		unset($_SESSION['user']);
		$jav->redir("login.php");
	}
 ?>
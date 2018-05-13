<?php 
	// session_destroy();
	include 'lib/javaSc.php';
	session_start();
	if ($_SESSION['admin']!="") {
		unset($_SESSION['admin']);
		$jav->redir("login.php");
	}
	if ($_SESSION['user']!="") {
		unset($_SESSION['user']);
		$jav->redir("login.php");
	}
 ?>
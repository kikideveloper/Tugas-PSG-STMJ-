<?php 
include 'lib/conect.php'; 
session_start();
// session_destroy();
if ($_SESSION['user']==null) {
	$jav->redir('login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dukcapil</title>
		<?php include 'main/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../assets/dist/css/carousel.css">
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top">
			<?php include 'main/navbar.php'; ?>
		</nav>
		<?php //include 'pages/dashboard.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-sm-offset-1 main">
				<?php 
					// include 'main/main_sidebar.php'; 
					$post = isset($_GET['user'])?$_GET['user']:"dashboard";
					include 'pages/'.$post.'.php';
				?>
				</div>
			</div>
		</div>
		<script src="assets/dist/js/jquery.min.js"></script>
		<script src="assets/dist/js/bootstrap.min.js"></script>
		<script src="assets/dist/js/holder.js"></script>
		<script src="assets/dist/js/ie10-viewport-bug-workaround.js"></script>
		<script src="assets/dist/js/ZeroClipboard.min.js"></script>
		<script src="assets/dist/js/anchor.js"></script>
		<script src="assets/dist/js/application.js"></script>
	</body>
</html>
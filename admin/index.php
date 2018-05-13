<?php 
include '../lib/conect.php'; 
session_start();
if ($_SESSION['admin']==null) {
	$jav->redir('../login.php');
}
?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dukcapil</title>
	<?php include 'main./head.php'; ?>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top">
		<?php include 'main/navbar.php'; ?>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-sm-offset-2 main">
				<?php 
				include 'main/main_sidebar.php'; 
				$post = isset($_GET['page'])?$_GET['page']:"dashboard";
				include 'pages/'.$post.'.php';
				?>
			</div>
		</div>
	</div>
</body>
</html>
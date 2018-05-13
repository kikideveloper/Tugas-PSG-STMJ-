
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Data Penduduk Online</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><a href="index.php?user=dashboard">Home</a></li>
			<li><a href="index.php?user=profile">Profile</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li>
			<?php if ($_SESSION['user'] != ""): ?>
				<a class="btn" href="userout.php">
					<i class="fa fa-sign-out"></i> Logout
				</a>
			 <?php elseif ($_SESSION['user']==""): ?>
				<a class="btn" href="login.php">
					<i class="fa fa-sign-in"></i> Login
				</a>
			<?php endif ?>
		</li>
	</ul>
	</div>
</div>
<!-- proses login -->
<?php 
// Untuk memanggil fungsi dan koneksi 
include "lib/conect.php";
// Untuk memulai session
session_start();
// Filter login :
// - jika sudah login atau session user ada maka
if (isset($_SESSION['admin'])!="") {
	// akan redirect ke halaman dasar user
	$jav->redir("index.php?page=dashboard");

// - Dan jika sudah login atau session admin ada maka
}elseif (isset($_SESSION['user'])!="") {
	// akan redirect ke halaman dasar admin
	$jav->redir("admin/index.php?page=dashboard");

// Dan jika tidak, eksekusi code berikut
}else{
	// Jika memencet tombol Login maka
	if (isset($_POST['btn-save'])) {
		// set email
		$email = $_POST['email'];
		// set password
		$password = $_POST['password'];
		// set Syntag SQL 
		$sql = "SELECT * FROM user WHERE email = '$email'";
		// set parameter
		$param = array($email);
		// set syntag beserta parameter (data yang akan di eksekusi)
		$row = $base->result($sql, $param);
		// set data trsebut dan eksekusi
		$data = $row->fetch();

		// jika data berlevelkan 5 (level dalam data tersebut)
		if ($data['level']==5) {
			// filter proses
			// jika data ada maka
			if ($data > 0){
				// filter password dengan hash_password
				// jika password sama dengan password di database maka 
				if (password_verify($password, $data['password'])) {
					// set session user dengan data nik
					$_SESSION['user'] = $data['nik'];
					// jika session user sudah terisi maka
					if ($_SESSION['user']!="") {
						// untuk memunculkan notifikasi
						$jav->alert('Berhasil login');
						// langsung redirect ke halaman dasar user
						$jav->redir('index.php?user=dashboard');	
					}
				// jika tidak
				}else{
					// munculkan notif 
					echo "<script>alert('Maaf Email atau Password anda salah')</script>";
				}
			// jika tidak munculkan notiv lagi
			}else{
				echo "<script>alert('Maaf Email atau Password anda salah')</script>";
			}
		// jika data berlevelkan 3 atau 4
		}elseif ($data['level']== 3 or 4) {
			//filter proses
			// jika data ada maka
			if ($data > 0) {
				// filter password dengan hash_password
				// jika password sama dengan password di database maka 
				if (password_verify($password, $data['password'])) {
					// set session admin dengan data nik
					$_SESSION['admin'] = $data['nik'];
					// jika session admin sudah terisi maka
					if ($_SESSION['admin']!="") {
						// untuk memunculkan notifikasi
						$jav->alert('Berhasil login');
						// langsung redirect ke halaman dasar admin
						$jav->redir('admin/index.php?page=dashboard');	
					}
				// jika tidak
				}else{
					// munculkan notif 
					echo "<script>alert('Maaf Email atau Password anda salah')</script>";
				}
			// jika tidak munculkan notiv lagi
			}else{
				echo "<script>alert('Maaf Email atau Password anda salah')</script>";
			}
		} 
	}
}
?>
<!-- Halaman Login -->
	<title>Dukcapil</title>
<link rel="stylesheet" type="text/css" href="assets/dist/css/login.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.css">

<div class="login">
	<div class="col-md-3 box">
		<div class="box-header">
			<h1>
				Login
			</h1>
		</div>
		<form method="post" action="login.php" class="form-signin">
			<div class="box-body col-md-12">
				<div class="center">
					<label>Email</label>
					<input class="form-control" type="mail" name="email" placeholder="Username or Email.." required>
				</div>
				<div class="center">
					<label>Password</label>
					<input class="form-control" type="password" name="password" placeholder="Pass.." required>
				</div>
			</div><br>
			<div class="box-footer">
				<br>
				<button type="submit" class="btn btn-success" name="btn-save">Login</button>
			</div>
		</form>
	</div>
</div>

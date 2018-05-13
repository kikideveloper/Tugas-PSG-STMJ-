<?php 
$nik = isset($_GET['nik'])?$_GET['nik']:'';
if ($nik!="") {
	$data=$base->select("user where nik='$nik'");
	$q=$data->fetch();

		// print_r($q['nik']);
}
?>

<form method="post" action="?page=user/machine&action=up">
	<input type="hidden" name="nik" value="<?=$q['nik']?>">
	<div class="col-md-8">

		<div class="col-lg-8">
			<label for="name">
				Nama
				
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama" value="<?=$q['name']?>">
		</div><br>
		<div class="col-md-6">
			<label for="email">
				Email
			</label>
			<input type="mail" name="email" class="form-control" placeholder="Example@mail.com" value="<?=$q['email']?>" required>
		</div><br><!-- 
		<div class="col-md-6">
			<label for="password">
				Password
			</label>
			<input type="password" name="password" class="form-control" placeholder="Password" value="<?=$password?>" required>
		</div><br> -->
		<div class="col-md-11">
			<label for="alamat">
				Address
			</label>
			<input type="text" name="alamat" class="form-control" placeholder="Address.." value="<?=$q['alamat']?>" required>
		</div><br>
		<div class="col-md-7">
			<label for="phone">
				phone
			</label>
			<input type="number" name="phone" class="form-control" placeholder="Address.." value="<?=$q['phone']?>" required>
		</div><br>
		<div class="col-md-4">
			<label for="gender">
				Gender
			</label>
			<select class="form-control" name="gender" required>
				<?php
				// $data = $base->select("");
				// if ($q[gender]==null) {
				// 	while ($row=$data->fetch()) {
				// 		echo "<option value='$row[id]'>$row[gender]</option>";
				// 	}
				// }else{
				// 	while ($row=$data->fetch()) {
				// 		echo "<option value='$q[gender]'>$row[gender]</option>";
				// 	}
				// }
				$data = $base->select("gender");
					while ($value = $data->fetch()) {
						echo "<option value='$value[id]'>$value[gender]</option>";
					}
					$d = $base->select("gender where id = '$q[gender]'");
					while ($v = $d->fetch()) {
						echo "<option value='$v[id]'>$v[gender]</option>";
					}
				?>
			</select>
		</div><br>
		<div class="col-md-2">
			<label for="level">
				Level
			</label>
			<select class="form-control" name="level" required>
				<?php
					$data = $base->select("level");
					while ($value = $data->fetch()) {
						echo "<option value='$value[id]'>$value[name]</option>";
					}
					$d = $base->select("level where id = '$q[level]'");
					while ($v = $d->fetch()) {
						echo "<option value='$v[id]'>$v[name]</option>";
					}
				?>
			</select>
		</div><br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary" type="submit">Save</button>
		</div>
	</div>
</form>
</div>
<?php 
$nik = isset($_GET['nik'])?$_GET['nik']:'';
if ($nik!="") {
	$data=$base->select("user where nik='$nik'");
	$q=$data->fetch();
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
		</div><br>
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
		
		<div class="col-md-7">
			<label>
				TTL
			</label>
			<input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" value="<?=$q['tmp_lahir']?>" required>
			<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?=$q['tgl_lahir']?>" required>
		</div><br>
		<div class="col-md-4">
			<label for="agama">
				Agama
			</label>
			<select class="form-control" name="agama" required>
				<?php
				$data = $base->select("agama");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[agama]</option>";
				}
				$d = $base->select("agama where id = '$q[agama]'");
				while ($v = $d->fetch()) {
					echo "<option value='$v[id]'>$v[agama]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-2">
			<label for="sts_perkawinan">
				Status Perkawinan
			</label>
			<select class="form-control" name="sts_perkawinan" required>
				<?php
				$data = $base->select("sts_perkawinan");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[nama]</option>";
				}
				$d = $base->select("sts_perkawinan where id = '$q[sts_perkawinan]'");
				while ($v = $d->fetch()) {
					echo "<option value='$v[id]'>$v[nama]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-7">
			<label for="pekerjaan">
				Pekerjaan
			</label>
			<input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?=$q['pekerjaan']?>" required>
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
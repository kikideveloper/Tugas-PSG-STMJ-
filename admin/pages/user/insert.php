<form method="post" action="?page=user/machine&action=plus" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="col-lg-8">
			<label for="nik">
				Nik
			</label>
			<input type="text" name="nik" class="form-control" placeholder="350 - xxxxxxxxx - 0001">
		</div><br>
		<div class="col-lg-8">
			<label for="name">
				Nama
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-md-6">
			<label for="email">
				Email
			</label>
			<input type="mail" name="email" class="form-control" placeholder="Example@mail.com" required>
		</div><br>
		<div class="col-md-6">
			<label for="password">
				Password
			</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
		</div><br>
		<div class="col-md-11">
			<label for="alamat">
				Address
			</label>
			<input type="text" name="alamat" class="form-control" placeholder="Address.." required>
		</div><br>
		<div class="col-md-7">
			<label for="phone">
				phone
			</label>
			<input type="number" name="phone" class="form-control" placeholder="Address.." required>
		</div><br>
		<div class="col-md-4">
			<label for="gender">
				Gender
			</label>
			<select class="form-control" name="gender" required>
				<?php
				echo "<option value='0'>-</option>";
				$data = $base->select("gender");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[gender]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-7">
			<label>
				TTL
			</label>
			<input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" required>
			<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
		</div><br>
		<div class="col-md-4">
			<label for="agama">
				Agama
			</label>
			<select class="form-control" name="agama" required>
				<?php
				echo "<option value='0'>-</option>";
				$data = $base->select("agama");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[agama]</option>";
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
				echo "<option value='0'>-</option>";
				$data = $base->select("sts_perkawinan");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[nama]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-7">
			<label for="pekerjaan">
				Pekerjaan
			</label>
			<input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
		</div><br>
		<div class="col-md-2">
			<label for="level">
				Level
			</label>
			<select class="form-control" name="level" required>
				<?php
				echo "<option value='0'>-</option>";
				$data = $base->select("level");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[name]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>
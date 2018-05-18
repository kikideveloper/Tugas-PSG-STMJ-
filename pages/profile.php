<h1 class="page-header">Data Penduduk</h1>
<div class="row">
	<form method="post" action="index.php?user=profile">
		<div class="input-group">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search NIK ">
			<span class="input-group-btn"></span>
			<button class="btn" name="cari" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<br>
		<?php
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$res = $base->select("user u, level l, gender g, agama a, sts_perkawinan s where u.nik LIKE '%$search%' and u.level=l.id and u.gender=g.id and u.agama=a.id and u.sts_perkawinan=s.id and u.level='5' and status = 'active'","u.nik, u.name, u.email, g.gender as gender, u.notif, u.tmp_lahir, u.tgl_lahir, a.agama, s.nama as status , u.pekerjaan, u.alamat, u.phone, l.name as level");?>

<div class="table-responsive">
	<div class="col-md-6">		
		<table class="table table-hover table-stiped">
		<?php
		$no=1;
		while ($data = $res->fetch()) {
			?>
				<tr>
				<th scope="col">NIK</th>
					<td> : </td>
					<td><?=$data['nik']?></td>
				</tr>
				<tr>
					<th scope="col">Name</th>
					<td> : </td>
					<td><?=$data["name"]?></td>
				</tr>
				<tr>
				<th scope="col">Email</th>
					<td> : </td>
					<td><?=$data['email']?></td>
				</tr>
				<tr>
					<th scope="col">Tempat Tanggal Lahir</th>
					<td> : </td>
					<td><?=$data["tmp_lahir"].",".$data["tgl_lahir"]?></th>
				</tr>
				<tr>
				<th scope="col">Gender</th>
					<td> : </td>
					<td><?=$data['gender']?></td>
				</tr>
		</table>
	</div>
	<div class="col-md-6">
		<table class="table table-hover table-stiped">
				
				<tr>
				<th scope="col">Level</th>
					<td> : </td>
					<td><?=$data['level']?></td>
				</tr>
				<tr>
				<th scope="col">Agama</th>
					<td> : </td>
					<td><?=$data['agama']?></td>
				</tr>
				<tr>
				<th scope="col">Status Perkawinan</th>
					<td> : </td>
					<td><?=$data['status']?></td>
				</tr>
				<tr>
				<th scope="col">Pekerjaan</th>
					<td> : </td>
					<td><?=$data['pekerjaan']?></td>
				</tr>
				<tr>
					<th scope="col">Pemberitahuan</th>
					<td> : </td>
					<td><?=$data['notif']?></td>
				</tr>
			<?php
			$no++;
			}
		}
		?>
		</table>
	</div>
</div>
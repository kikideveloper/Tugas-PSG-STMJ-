<h1 class="page-header">Data Penduduk</h1>
<div class="row">
	<form method="post" action="index.php?page=data_penduduk/index">
		<div class="input-group">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search NIK ">
			<span class="input-group-btn"></span>
			<button class="btn" name="cari" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<br>
<div class="table-responsive">
	<table class="table table-hover table-stiped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">NIK</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Gender</th>
				<th scope="col">Address</th>
				<th scope="col">Phone</th>
				<th scope="col">Level</th>
			</tr>
		</thead>
		<?php
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$res = $base->select("user u, level l, gender g where u.nik LIKE '%$search%' and u.level=l.id and u.gender=g.id and u.level='5' and status = 'active'","u.nik, u.name, u.email, g.gender as gender, u.alamat, u.phone, l.name as level");
		}else{
			$res = $base->select("user u, level l, gender g where u.level=l.id and u.gender=g.id and u.level='5' and status = 'active'","u.nik, u.name, u.email, g.gender as gender, u.alamat, u.phone, l.name as level");
		}
		$no=1;
		while ($data = $res->fetch()) {
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data['nik']?></td>
					<td><?=$data["name"]?></td>
					<td><?=$data['email']?></td>
					<td><?=$data['gender']?></td>
					<td><?=$data['alamat']?></td>
					<td><?=$data['phone']?></td>
					<td><?=$data['level']?></td>
				</tr>
			</tbody>
			<?php
			$no++;
			// print_r($data);
		}
		?>
	</table>
</div>
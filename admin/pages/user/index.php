<h1 class="page-header">User</h1>

<div class="row">
	<form class="" method="post" action="index.php?page=user/index">
		<div class="input-group src">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
			<span class="input-group-btn"></span>
			<button class="btn" name="cari" type="submit"><i class="fa fa-search"></i></button>
		</div>
		<a class="btn btn-primary pull-right" href="index.php?page=user/insert"><i class="fa fa-fw fa-plus"></i> Add</a>
	</form>
</div>
<br>
<div class="table-responsive">
	<table class="table table-hover table-stiped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">gender</th>
				<th scope="col">Phone</th>
				<th scope="col">Address</th>
				<th scope="col">Level</th>
				<th scope="col" colspan="2">Option</th>
			</tr>
		</thead>
		<?php
		$post=$base->sant(INPUT_POST);
		if ($post != "") {
			extract($post);
			$res = $base->select("user u, level l, gender g where u.name LIKE '%$search%' and u.level=l.id and u.gender=g.id and status = 'active'","u.nik, u.name, u.email, g.gender as gender ,u.phone, u.alamat, l.name as level");
		}else {	
			$res = $base->select("user u, level l, gender g where u.level=l.id and u.gender=g.id and status = 'active'","u.nik, u.name, u.email, g.gender as gender, u.phone, u.alamat, l.name as level");
		}
		$no=1;
		while ($data = $res->fetch()) {
			// print_r($data);
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data["name"]?></td>
					<td><?=$data['email']?></td>
					<td><?=$data['gender']?></td>
					<td><?=$data['phone']?></td>
					<td><?=$data['alamat']?></td>
					<td><?=$data['level']?></td>
					<td><a href="index.php?page=user/update&nik=<?=$data['nik']?>" class="btn btn-primary">update</a></td>
					<td><a href="?page=user/machine&action=del&nik=<?=$data['nik']?>" onClick="return confirm('Are you sure to Delete This data?')" class="btn btn-danger">delete</a></td>
				</tr>
			</tbody>
			<?php
			$no++;
		// print_r($data);
		}
		?>
	</table>
</div>
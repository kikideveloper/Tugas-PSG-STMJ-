<?php 
$nik=$_SESSION['admin'];
$sql	= $base->select("user where nik = '$nik' ");
$magang = $sql->fetch();
 ?>
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
				<th scope="col">Notif</th>
				<th scope="col" colspan="3">Option</th>
			</tr>
		</thead>
		<?php
		$post=$base->sant(INPUT_POST);
		if ($post != "") {
			extract($post);
			$res = $base->select("user u, level l, gender g where u.name LIKE '%$search%' and u.level=l.id and u.gender=g.id and status = 'active'","u.nik, u.name, u.email, g.gender as gender ,u.phone, u.notif, u.alamat, l.name as level");
		}else {	
			$res = $base->select("user u, level l, gender g where u.level=l.id and u.gender=g.id and status = 'active'","u.nik, u.name, u.email, g.gender as gender, u.phone, u.alamat, u.notif, l.name as level");
		}
		$no=1;
		while ($data = $res->fetch()) {
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
					<td>
						<?php 
							if ($data['notif']=="") {
								echo "<i class='fa fa-exclamation-circle'></i>";
							}else{
								echo "<i class='fa fa-check'></i>";
							}
						 ?>
					</td>
					<td>
						<?php 
							if ($magang['level']=='3'){ 
								?>	
							<a href="index.php?page=user/update&nik=<?=$data['nik']?>" class="btn btn-primary isDisabled disabled" aria-disabled="true">
								update
							</a>
						<?php 
							}else{ 
						?>
							<a href="index.php?page=user/update&nik=<?=$data['nik']?>" class="btn btn-primary">
								update
							</a>
						<?php	} ?>
					</td>
					<td>
						<?php 
							if ($magang['level']=='3'){ 
								?>	
							<a href="?page=user/machine&action=del&nik=<?=$data['nik']?>" onClick="return confirm('Are you sure to Delete This data?')" class="btn btn-danger isDisabled disabled" aria-disabled="true">
								delete
							</a>
						<?php 
							}else{ 
						?>
							<a href="?page=user/machine&action=del&nik=<?=$data['nik']?>" onClick="return confirm('Are you sure to Delete This data?')" class="btn btn-danger">
								delete
							</a>
						<?php	} ?>
					</td>
					<td>
							<a href="?page=user/notif&nik=<?=$data['nik']?>"  class="btn btn-success">
								Notif
							</a>
					</td>
				</tr>
			</tbody>
			<?php
			$no++;
		}
		?>
	</table>
</div>

<script type="javascript">
	link.addEventListener('click',function (event){
	if(this.parentElment.classList.contains('isDisabled')){
	event.preventDefault();
}
});
</script>
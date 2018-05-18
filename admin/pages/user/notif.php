<?php 
$nik = isset($_GET['nik'])?$_GET['nik']:'';
if ($nik!="") {
	$data=$base->select("user where nik='$nik'");
	$q=$data->fetch();
}
?>

<form method="post" action="?page=user/machine&action=notif">
	<input type="hidden" name="nik" value="<?=$q['nik']?>">
	<div class="col-md-8">

		<div class="col-lg-8">
			<label for="notif">
				Alert
			</label>
			<input type="text" name="notif" class="form-control" placeholder="Notif" required>
		</div><br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary" type="submit">Save</button>
		</div>
	</div>
</form>
</div>
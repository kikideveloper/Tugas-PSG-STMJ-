<?php 
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$pas = password_hash($password, PASSWORD_DEFAULT);
		$data = $base->insert("user","'$nik','$name','$email','$pas','$gender', '$tmp_lahir', '$tgl_lahir', '$agama', '$sts_perkawinan', '$pekerjaan','$alamat','$phone','','$level','active'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=user/index");
	}elseif ($action=="up") {
		$jav->alert("are you sure to update this user?");
		$post=$base->sant(INPUT_POST);
		extract($post);
		$jav->alert($nik, $level);
		$data = $base->update("user","name='$name',email='$email',gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', agama='$agama', sts_perkawinan='$sts_perkawinan', pekerjaan='$pekerjaan', alamat='$alamat',phone='$phone',level='$level' where nik='$nik'");
		$jav->alert("your Acount has been Updated!!");
	}elseif ($action=="del") {
		$nik=isset($_GET['nik'])?$_GET['nik']:'';
		$data = $base->update("user","status = 'deleted' where nik='$nik'");
		$jav->alert("This Acount has been Delete!!");
		$jav->redir("?page=user/index");
	}elseif ($action=="notif") {
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("user","notif='$notif' where nik='$nik'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=user/index");
	}
}
 ?>
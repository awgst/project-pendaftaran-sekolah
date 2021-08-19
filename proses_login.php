<?php
	session_start();
	include 'koneksi.php';
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql=mysqli_query($koneksi,"select * from siswa where email='$email' and pass='$pass'");
	$data=mysqli_num_rows($sql);
	$query=mysqli_fetch_array($sql);
	if ($data>0) {
		
		$_SESSION['login']="login";
		$_SESSION['nama']=$query['nama'];
		$_SESSION['id']=$query['id'];
		header("location: login.php");
	}
	if ($email=="admin"&&$pass="admin") {
		$_SESSION['login']="login";
		$_SESSION['nama']="admin";
		header("location: admin.php");
	}
	else{
		header("location:index.php?pesan=gagal");
	}
?>
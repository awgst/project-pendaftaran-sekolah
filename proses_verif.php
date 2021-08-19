<?php
	include 'koneksi.php';
	session_start();
	$id=$_SESSION['id'];
	$sql=mysqli_query($koneksi,"select * from siswa where id='$id'");
    $data=mysqli_fetch_array($sql);
    $nama=$data['nama'];
    $email=$data['email'];
    $pass=$data['pass'];
    $jk=$data['jenis_kelamin'];
    $agama=$data['agama'];
    $update=mysqli_query($koneksi,"update siswa set id='$id', nama='$nama', email='$email', pass='$pass', jenis_kelamin='$jk', agama='$agama', status='Sudah Terverifikasi' where id='$id'");
    header("location: login.php");

?>

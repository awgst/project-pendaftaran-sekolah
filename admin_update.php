<?php
	include "koneksi.php";
	$id = $_POST['id'];
$nama = $_POST['nama']; //sesuai name form
$jenis_kelamin = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
	}
	$query = mysqli_query($koneksi,"update siswa set nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', alamat='$alamat', status='$status' where id='$id'") or die(mysqli_error($koneksi));
	if($query)
	{
	     echo"Proses update berhasil, ingin lihat hasil <a href = 'admin_tampil_data.php'>disini</a>";
	}
	?>
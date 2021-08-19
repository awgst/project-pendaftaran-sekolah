<?php
include'koneksi.php';//menjalankan

$nama = $_POST['nama']; //sesuai name form
$email=$_POST['email'];
$pass=$_POST['pwd'];
$jenis_kelamin = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];


$query = mysqli_query($koneksi,"insert into siswa values('','$nama','$email','$pass', '$jenis_kelamin','$agama','$alamat','Belum Terverifikasi')");

if($query!="") {

	header("location: halaman_lanjutan.php");
}
else
{
	
}
?>
<?php
	include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi,"delete from siswa where id = '$id'") or die(mysqli_error($koneksi));
if($query)
{
    header("Location:admin.php");
}
?>
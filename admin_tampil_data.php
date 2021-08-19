<!DOCTYPE html>
<html>
<head>
	<title>Tampil data</title>
</head>

<body align="center">
	<hr>
	<table class="table" align="center" border="1">
		<tr>
			<th> Nama </th>
			<th> Jenis Kelamin</th>
			<th> Agama </th>
			<th> Alamat </th>
			<th> Status </th>
			<th> Aksi </th>

		</tr>
		<?php
		include'koneksi.php';

		$sql = mysqli_query($koneksi,"select * from siswa") or die(mysql_error());
		while ($query = mysqli_fetch_array($sql))  {
		?>
		<tr>
			<td> <?php echo $query['nama']; ?></td> //sesuai nama database
			<td> <?php echo $query['jenis_kelamin']; ?></td>
			<td> <?php echo $query['agama']; ?></td>
			<td> <?php echo $query['alamat']; ?></td>
			<td> <?php echo $query['status']; ?></td>
			<td> <a href="admin_edit.php?id= <?php echo $query['id'] ?>"> Edit </a> 
			<a href="admin_hapus.php?id= <?php echo $query['id'] ?>"> Hapus </a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
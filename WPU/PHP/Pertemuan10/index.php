<?php 

require 'functions.php';

// array yang arraynya dibuat sendiri
$mahasiswa = query("SELECT * FROM mahasiswa");


?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP - PHP & Mysql</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		
		
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $mahasiswa as $row) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?'); " >hapus</a>
			</td>
			<td><img src="Image/<?php echo $row["gambar"]; ?>" width="50"></td>
			<td><?php echo $row["nrp"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	
	</table>

</body>
</html>
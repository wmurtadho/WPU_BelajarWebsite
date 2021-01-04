<?php 

require 'functions.php';

// ambil data dari tabel mahasiswa / query data mahasiswa
// mysqli_query(variable dari mysqli_connect, "query sql/ kodingan sql")
// $result = mysqli_query($conn, "SELECT * FROM mahasiswaaa");
// var_dump($result)
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// untuk munculin errornya 
// if ( !$result ){
// 	echo mysqli_error($conn);
// }

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assosiative
// mysqli_fetch_array() // mengembalikan keduanya ("mending jangan dipake wkwkwkwkwk")
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// loopig melihat data mahasiswa
// while ($mhs = mysqli_fetch_assoc($result)){
// 	var_dump($mhs);	
// }	



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP - PHP & Mysql</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

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
		<?php while ( $row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="">hapus</a>
			</td>
			<td><img src="<?php $row["gambar"]; ?>" width="50"></td>
			<td><?php echo $row["nrp"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
	
	</table>

</body>
</html>
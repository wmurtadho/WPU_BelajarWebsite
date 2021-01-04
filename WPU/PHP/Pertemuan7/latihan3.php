<!DOCTYPE html>
<html>
<head>
	<title>PHP - GET & POST</title>
</head>
<body>

 	<?php if ( isset($_POST["submit"])) : ?>
        <h1>Halo, Selamat Datang <?php $_POST["nama"]; ?> </h1>
    <?php endif; ?>

	<!-- <form action="latihan4.php" method="post"> -->
	<form action="" method="post">
		Masukan Nama :
		<!-- name itu penting karena akan menjadi "key di array assosiative $_POST nya " -->
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>

</body>
</html>
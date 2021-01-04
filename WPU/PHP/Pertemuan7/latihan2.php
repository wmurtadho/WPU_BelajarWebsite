<?php 
// jike "nama" belum dibuat makan kembali ke latihan1.php
if (!isset($_GET["nama"]) || 
 	!isset($_GET["nrp"]) ||
 	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["email"]) 
) 
{
	// redirect
	header("Location: latihan1.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - GET & POST</title>
</head>
<body>


<h1>Detail Mahasiswa</h1>

<ul>
	<li><img src="<?php echo $_GET["gambar"]; ?>"></li>
    <li><?php echo $_GET["nama"]; ?></li>
    <li><?php echo $_GET["nrp"]; ?></li>
    <li><?php echo $_GET["email"]; ?></li>
    <li><?php echo $_GET["jurusan"]; ?></li>
</ul>


<a href="latihan1.php">Kembali Ke Latihan 1</a>
    
</body>
</html>
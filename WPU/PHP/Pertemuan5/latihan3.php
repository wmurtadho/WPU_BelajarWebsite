<?php 


$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>Nama : <?php echo $mhs[0]; ?></li>
            <li>NRP : <?php echo $mhs[1]; ?></li>
            <li>Jurusan : <?php echo $mhs[2]; ?></li>
            <li> Email : <?php echo $mhs[3]; ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</head>
<body>
    
</body>
</html>
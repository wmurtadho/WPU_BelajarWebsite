<?php 

// $mahasiswa = [
//     ["Sandhika Galih", "043040023", "sandhikagalig@unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001", "dody@gmail.com", "Teknik Informatika"]
// ];

// Array assosiative
// definisinya sama sepertei array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [[
    "nama" => "Sandhika Galih", 
    "nrp" => "043040023", 
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "ehe.jpg"
    ], 
    [
    "nama" => "Doddy Ferdiansyah",
    "nrp" => "033040001", 
    "email" => "dody@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "ribbon.png"
    // "tugas" => [90 , 80, 100]
    ]

];

// echo $mahasiswa["nama"];
// echo $mahasiswa[1]["tugas"][1];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Array Assosiative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs): ?>
        <ul>
            <li><img src="<?php echo $mhs["gambar"]; ?>" alt=""></li>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>
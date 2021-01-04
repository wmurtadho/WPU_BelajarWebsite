<?php  

// // Variable Scope / lingkup variabel
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;

// }

// tampilX();
// // echo "<br>";
// // echo $x;


// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Assosiative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Sandika Galih";
// $_GET["nrp"] = "043040023";
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
// var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - GET & POST</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
        <ul>
        <?php foreach( $mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?
                    nama=<?php echo $mhs["nama"]; ?>&
                    nrp=<?php echo $mhs["nrp"]; ?>&
                    email=<?php echo $mhs["email"]; ?>&
                    jurusan=<?php echo $mhs["jurusan"]; ?>&
                    gambar=<?php echo $mhs["gambar"]; ?>&
                    ">  <?php echo $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>

    
</body>
</html>


<?php 

// koneksi ke database
// mysqli_connect("host/ip address", "username", "password", "nama database")
// mysqli_connect("localhost", "root", "", "phpdasar")
// pakai variable biar mudah di mysqli_query
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// funtion query dari index.php query("SELECT * FROM mahasiswa") menjadi query("query") jadi string "SELECT * FROM mahasiswa disimpan di $query"
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	// berupa kotak kosong karena ini array
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		// jadi kotak kosong itu diisi baju - baju, kenapa dimasukin kotak karena ini menggunakan array nantinya menggunakan perulangan foreach
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO mahasiswa
				VALUES 
				('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn); 
}

 ?>	
<?php 

// koneksi ke database
// mysqli_connect("host/ip address", "username", "password", "nama database")
// mysqli_connect("localhost", "root", "", "phpdasar")
// pakai variable biar mudah di mysqli_query
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

 ?>	
<?php 
// date()
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time()
// Unix Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 Januari 1970 
// echo time();
// echo date("d M Y", time()+60*60*24*100); //Seratus hari kedepan
// echo "<br>";
// echo date("d M Y", time()-60*60*24*100); //Seratus hari kebelakang

// mktime()
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
// echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
echo date("l", strtotime("25 august 1985"));
?>
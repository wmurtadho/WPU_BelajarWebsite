show databases;

create database phpdasar;

show databases;

use phpdasar;

create table mahasiswa (
  id int primary key auto_increment,
  nama varchar(100),
  nrp char(9),
  email varchar(100),
  jurusan varchar(100),
  gambar varchar(100)
  );
  
 -- masukin data ke tabel, harus urut, kalau auto_increment kosongin aja
 insert into mahasiswa values ('', 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'sandhika.jpeg'); 
 insert into mahasiswa values ('', 'Doddy', '133040123', 'doddy@yahoo.com', 'Teknik Mesin', 'doddy.png');
 insert into mahasiswa values ('', 'Erik', '153030321', 'erik@gmail.com', 'Ekonomi', 'erik.jpg');
 
 
 select * from mahasiswa;
 
 select nrp from mahasiswa;
 
 select nama, nrp from mahasiswa;
 
 -- mencari orang dari nrp 043040023
 select * from mahasiswa where nrp = '043040023'

 -- mengupdate data 
 update mahasiswa set jurusan = 'Teknik Industri' where id = 2;

 select * from mahasiswa;

 -- menghapus tabel
 drop table mahasiswa;

 -- menampilkan daftar tabel
 show tables;

	-- menghapus database
 drop database phpdasar;
 
 show databases;










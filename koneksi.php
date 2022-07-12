<?php
/*=======================================================================================
NIM		: 190030380
NAMA	: DEWA NGAKAN PUTU AGUS WAHYU ALDERA
KELAS 	: BK203
=========================================================================================*/

$host="localhost"; //nama server
$username="root"; //username masuk server
$password=""; //password masuk server
$database="perpustakaan"; //database yang diakses

//membuat koneksi
$koneksi=mysqli_connect($host, $username, $password, $database);

//mengecek koneksi
if (!$koneksi) {
	die("Koneksi gagal: " .  mysqli_connect_error());	
}
?>
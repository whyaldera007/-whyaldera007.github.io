<?php
require "koneksi.php"; //cek sesion

//data dari halaman 190030380-add.php dimasukkan ke dalam variable dgn method post
$id_penerbit=$_POST['id_penerbit']; //input name = "penerbit"
$nama=$_POST['nama']; //input name = "nama"
$kota=$_POST['kota']; //input name = "kota"
$contact_name=$_POST['contact_name']; //input name = "kontak nama"
$contact_phone=$_POST['contact_phone']; //input name = "hp"
$alamat=$_POST['alamat']; //input name = "alamat"
$email=$_POST['email']; //input name = "email"
$status=$_POST['status']; //input name = "status"

//cek apakah penerbit id sudah ada dalam tabel t_penerbit
$sql ="select * from t_penerbit where (id_penerbit = '$id_penerbit')";

$hasil = mysqli_query($koneksi,$sql);
if (mysqli_num_rows($hasil) > 0) {
	//user sudah ada, tampilkan messagebox dan redirect kembali ke halaman 190030380-add.php
	echo "<script>alert('penerbit dengan ID tersebut sudah ada, silahkan gunakan ID penerbit lainnya.');
		  document.location='190030380-add.php'</script>";
}else {
	//penerbit belum ada (melanjutkan simpan data baru)
	//query insert data ke tabel t_penerbit
	$sql="insert into t_penerbit (nama, kota, contact_name, contact_phone, alamat, email, status)
	values ('$nama', '$kota', '$contact_name', '$contact_phone', '$alamat', '$email', '$status');";

//eksekusi perintah insert into
$save = mysqli_query($koneksi, $sql);

if ($save){
	//tampilkan messagebox berhasil simpan dan redirect ke halaman index.php
	echo "<script>alert('data penerbit telah berhasil disimpan.'); document.location='index.php'</script>";
} else {
	//jika data gagal disimpan
	echo "<h1>Data penerbit gagal disimpan!"; 
	echo "<a href=\"190030380-add.php\">Ulangi Kembali</a>";}
}

//menutup koneksi
mysqli_close($koneksi);
?>
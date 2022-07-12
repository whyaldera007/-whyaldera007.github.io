<?php
require "koneksi.php"; //cek sesion

//data dari halaman index.php dimasukkan ke dalam variable dgn method get
$data=$_GET['id']; 
$sql="delete from t_penerbit where (id_penerbit = '$data');";

//eksekusi perintah delete
$del = mysqli_query($koneksi,$sql);

//jika berhasil di delete
if ($del){	
	echo "<script>alert('Data penerbit telah berhasil dihapus.'); document.location='index.php'</script>";
} else {
//jika gagal di delete
	echo "<script>alert('Data penerbit gagal dihapus. Silahkan ulangi kembali.'); document.location='index.php'</script>";}

//menutup koneksi
mysqli_close($koneksi);
?>
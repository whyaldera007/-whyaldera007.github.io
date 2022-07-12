<?php
require "koneksi.php"; //cek sesion

//data dari 190030380-view.php dimasukan ke variable dengan method post
$id_penerbit=$_POST['id_penerbit']; //input name = "penerbit"
$nama=$_POST['nama']; //input name = "nama"
$kota=$_POST['kota']; //input name = "kota"
$contact_name=$_POST['contact_name']; //input name = "kontak nama"
$contact_phone=$_POST['contact_phone']; //input name = "hp"
$alamat=$_POST['alamat']; //input name = alamat""
$email=$_POST['email']; //input name = "email"
$status=$_POST['status']; //input name = "status"

//membuat variable untuk concate query sql dengan kondisi tertentu
$x="";
$y="";
$z="";

//query basic
//query update gigunakan untuk merubah data yang sudahh ada
$x="update t_penerbit set nama='$nama', kota='$kota', contact_name='$contact_name', contact_phone='$contact_phone', email='$email', alamat='$alamat', status='$status'";

//menambahkan klausa where
$sql = $x ." where (id_penerbit = '$id_penerbit')";

//eksekusi printah update
$update = mysqli_query($koneksi, $sql);

//data diupdate
if ($update){
//jika berhasil
	echo "<script>alert('Data penerbit telah berhasil di-update.'); document.location='index.php'</script>";
} else {
//jika gagal
	echo "<script>alert('Data penerbit gagal di-update. Silahkan ulangi kembali.'); document.location='190030380-view.php?id=$pengarang'</script>";}

	//menutup koneksi
    mysqli_close($koneksi);
?>
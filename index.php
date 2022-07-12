<?php
require "koneksi.php"; //require digunakan untuk menampilkan data ke sebuah halaman
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--memanggil style.css-->
<link type="text/css" href="style.css" rel="stylesheet">
<title>TABEL PENERBIT</title>
</head>

<body>
<?php

//menampilkan data pada tabel penerbit
$sql="SELECT * FROM t_penerbit";

//menjalankan query ke database
$hasil = mysqli_query($koneksi, $sql) ;

//result set lebih > 0 (query mengahasilkan record data)
//jika query menghasilkan result set(jika ada)
if (mysqli_num_rows($hasil) > 0) {
	echo "<h1>DAFTAR TABEL PENERBIT</h1>";
	//memunculkan caption

	//menampilkan jumlah data
	echo "<h2>Jumlah data: ". mysqli_num_rows($hasil)."</h2>";
	
	$counter = 1;
	//nomor urut

	//membuat tabel
	echo "<table border=\"1\">
			<tr>
                <th>No</th> 
				<th>ID Penerbit</th>
				<th>Nama</th>
				<th>Kota</th>
				<th>Kontak Nama</th>
				<th>Hp</th>
                <th>Alamat</th>
				<th>Email</th>
				<th>Status</th>
                <th>Aksi</th>
			</tr>";
			
	//membuat isi tabel dalam perulangan
	while($data = mysqli_fetch_array($hasil)) { 

		//mengkonvresi status
		$img_sts = "ok.png";
		$tip_sts = "Aktif";
		if ($data["status"] == 0) {
			$img_sts="ko.png";
			$tip_sts="Non Aktif";}
			
	echo "<tr >
			<td>$counter</td>  
			<td>$data[id_penerbit]</td>
			<td>$data[nama]</td>
			<td>$data[kota]</td>
            <td>$data[contact_name]</td>
            <td>$data[contact_phone]</td>
			<td>$data[alamat]</td>
			<td>$data[email]</td>
            <td class=\"center\">
				<!-- akan tampil dalam bentuk gambar dengan tooltip -->
				<img src=\"$img_sts\" alt=\"status\" title=\"$tip_sts\">
			</td>
			
			<td><a href=\"190030380-view.php?id=$data[id_penerbit]\">Ubah</a> |
				<a href=\"190030380-del.php?id=$data[id_penerbit]\">Hapus</a>
			</td>
		</tr>";
		$counter++; //increment
	}
	echo "</table>";

} else {
	echo "<h3>Data penerbit tidak tersedia!</h3>";	
}

//menutup koneksi
mysqli_close($koneksi);	
?>

<h2><a href="190030380-add.php">MENAMBAHKAN DATA PENERBIT</a></h2>
</body>
</html>

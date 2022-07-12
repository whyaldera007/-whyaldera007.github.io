<?php
require "koneksi.php"; //cek sesion
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>update</title>
</head>
<link type="text/css" href="style.css" rel="stylesheet">
<h2>MENGUPDATE DATA PENERBIT</h2>

<!--melakukan validasai terhadap inputan data menggunakan JavaScript, di cek semua datanya, jika salah satu kolom belum di isi, maka akan diberikan peringatan, dan langsung fokus ke kolom yang kosong -->
<script type="text/javascript">
function cek_form(frm){	
	if(frm.id_penerbit.value==""){
		alert("Silahkan lengkapi kolom ID Penerbit");
		frm.id_penerbit.focus();
		return false;
	}else if(frm.nama.value==""){
		alert("Silahkan lengkapi kolom Nama");
		frm.nama.focus();
		return false;
    }else if(frm.kota.value==""){
		alert("Silahkan lengkapi kolom Kota");
		frm.alamat.focus();
		return false;
	}else if(frm.contact_name.value==""){
		alert("Silahkan lengkapi kolom Kontak Nama");
		frm.contact_name.focus();
		return false;
	}else if(frm.contact_phone.value==""){
		alert("Silahkan lengkapi kolom Hp");
		frm.contact_phone.focus();
		return false;
    }else if(frm.alamat.value==""){
        alert("Silahkan lengkapi kolom Alamat");
        frm.Alamat.focus();
        return false;
    }else if(frm.email.value==""){
        alert("Silahkan lengkapi kolom Email");
        frm.email.focus();
        return false;
	}else return true;
}
</script>

</head>
<body>
<?php
//data dari halaman home.php dimasukkan ke dalam variable dengan method get
$data=$_GET['id']; 

//load data sesuai penerbit id
$sql ="select * from t_penerbit where (id_penerbit = '$data')";

//eksekusi query
$hasil = mysqli_query($koneksi,$sql) ;

//jika record ditemukan
if (mysqli_num_rows($hasil) > 0) {

//menampilkan data pada script html
$data=mysqli_fetch_array($hasil);
?>

<!--input data akan diproses pada halaman 190030380-save.php-->
<form name="form1" action="190030380-update.php" method="post" onSubmit="return cek_form(this)" enctype="multipart/form-data">
<!--ID/pengenal yg akan diparsing adalah atribut "name" pada masing-masing control-->
<!--enctype="multipart/form-data" digunakan untuk kebutuhan upload file -->

    <table border="1">
        <tr>
            <td>ID Penerbit</td>
            <td><input type="number" name="id_penerbit" class="txt" value="<?php echo "$data[id_penerbit]"; ?>" readonly> </td>
        </tr>	
            <!--bisa dibaca tapi tidak bisa dirubah-->
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" class="txt" maxlength="50" value="<?php echo "$data[nama]"; ?>"> </td>
        </tr>

        <tr>
            <td>Kota</td>
            <td><input type="text" name="kota" class="txt" maxlength="100" value="<?php echo "$data[kota]"; ?>"> </td>
        </tr>

        <tr>
            <td>Kontak Nama</td>
            <td><input type="text" name="contact_name" class="txt" maxlength="50" value="<?php echo "$data[contact_name]"; ?>"> </td>
        </tr>
        
        <tr>
            <td>Hp</td>
            <td><input type="number" name="contact_phone" class="txt" maxlength="15" value="<?php echo "$data[contact_phone]"; ?>"> </td>
        </tr>
        
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" class="txt" maxlength="100" value="<?php echo "$data[alamat]"; ?>"> </td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email" class="txt" maxlength="60" value="<?php echo "$data[email]"; ?>"> </td>
        </tr>

         <tr>
            <td>Status</td>
            <td>       
                 
            <input name="status" type="radio" id="sts" value="1" <?php if($data['status']==1){ echo "checked=checked";}  ?>/> Aktif
            <input name="status" type="radio" id="sts" value="0" <?php if($data['status']==0){ echo "checked=checked";}  ?>/> Non-Aktif
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="btn">
            <input type="reset" value="Reset" class="btn"></td>
        </tr>
    </table>
</form>

<?php
}

else { 
	echo "<script>alert('Data penerbit tidak ditemukan.');
		  document.location='index.php'</script>";
}
?>

<!--kembali ke index-->
<h3><a href="index.php">KEMBALI</a></h3>

</body>
</html>

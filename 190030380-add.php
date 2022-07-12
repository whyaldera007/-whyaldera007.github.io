<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MENAMBAHKAN DATA PENERBIT</title>
<link type="text/css" href="style.css" rel="stylesheet">

<!--melakukan validasai terhadap inputan data menggunakan JavaScript, di cek semua datanya
jika salah satu kolom belum di isi, maka akan diberikan peringatan-->
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
		frm.kota.focus();
		return false;
	}else if(frm.contact_name.value==""){
		alert("Silahkan lengkapi kolom Kontak Nama");
		frm.contact_name.focus();
		return false;
    }else if(frm.contact_phone.value==""){
        alert("Silahkan lengkapi kolom Alamat");
        frm.contact_phone.focus();
        return false;
    }else if(frm.alamat.value==""){
        alert("Silahkan lengkapi kolom Alamat");
        frm.alamat.focus();
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
<H2>TAMBAH DATA PENERBIT BARU</H2>
<link type="text/css" href="style.css" rel="stylesheet">

<form name="form1" action="190030380-save.php" method="post" onSubmit="return cek_form(this)" enctype="multipart/form-data">
    <!-- on submit untuk memanggil fungsi cek_form yaitu form1-->
    <!--method:POST id yang akan diparsing adalah atribut "name" pada masing-masing control-->
    <!--enctype="multipart/form-data" digunakan untuk kebutuhan upload file -->
    <table border="1">
        <tr>
            <td>ID Penerbit</td>
            <td><input type="number" name="id_penerbit" class="txt" maxlength="5"></td>
        </tr>	

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" class="txt" maxlength="50"></td>
        </tr>

        <tr>
            <td>Kota</td>
            <td><input type="text" name="kota" class="txt" maxlength="100"></td>
        </tr>
    
        <tr>
            <td>Kontak Nama</td>
            <td><input type="text" name="contact_name" class="txt" maxlength="50"></td>
        </tr>
        
        <tr>
            <td>Hp</td>
            <td><input type="number" name="contact_phone" class="txt" maxlength="15"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" class="txt" maxlength="100"></td>
        </tr>
    
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" class="txt" maxlength="50"></td>
        </tr>

        <tr>
            <td>Status</td>
            <td>       
                 
            <input name="status" type="radio" id="sts" value="1"/> Aktif
            <input name="status" type="radio" id="sts" value="0"/> Non-Aktif
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="btn">
            <input type="reset" value="Reset" class="btn"></td>
        </tr>
    </table>
</form>

<!--kembali ke index-->
<h3><a href="index.php">KEMBALI</a></h3>
</body>
</html>

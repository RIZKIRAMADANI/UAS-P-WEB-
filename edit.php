<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/mediaqueries.css">
<title>Untitled Document</title>
</head>

<body>
<div class="container">
	<div class="header">RIZKI RAMADANI | 11311520 </div>
	<div class="main">
		<div class="left">
		  <p><a href="index.html">Home</a></p>
	      <p><a href="tampil.php">Tampil Data</a></p>
	      <p><a href="rizkiramadani.html">RIZKI RAMADANI</a></p>
	  </div>
	  <div class="middle">
	  <?php
$nama =$_REQUEST['nama'];

echo $nama;
include "koneksi.php";

$query = mysql_query("select * from tbl_mahasiswa where nama = '$nama' ");
$data=mysql_fetch_array($query);



?>
        <form action="update_data.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <p align="left">Nama
            <input name="nama" type="text" id="nama" value="<?php echo $data['nama'] ?>" />
          </p>
          <p>alamat
            <input name="alamat" type="text" id="alamat" value="<?php echo $data['alamat'] ?>" />
          </p>
          <p>nope
            <input name="nope" type="text" id="nope" value="<?php echo $data['nope'] ?>" />
          </p>
          <p>Jenis Kelamin
            <select name="jeniskelamin" id="jeniskelamin">
                <option>laki-laki</option>
                <option>perempuan</option>
            </select>
          </p>
          <p>Jurusan
            <label> <br />
            </label>
              <label>
              <input type="radio" name="jurusan" value="teknik informatika" />
                Teknik Informatika</label>
              <label>
              <input type="radio" name="jurusan" value="Sistem Informasi" />
                Sistem Informasi</label>
          </p>
          <p>
            <label>
            <input type="radio" name="jurusan" value="komputer Akuntansi" />
              komuter akuntansi</label>
            <label>
            <input type="radio" name="jurusan" value="Manajemen Informatika" />
              manejemen informatika</label>
            <label>
            <input type="radio" name="jurusan" value="jurusan" />
              teknik komputer</label>
            <br />
          </p>
          <p>
            <input name="button" type="submit" id="button" value="update" />
          </p>
        </form>
	  </div>
		<div class="right">SI HX SP </div>
	</div>
	<div class="footer">UAS SP 2015 </div>
</div>

</body>
</html>

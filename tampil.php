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
		  <table width="614" border="1">
            <tr>
              <td width="55">NOMOR</td>
              <td width="77">NAMA</td>
              <td width="83">ALAMAT</td>
              <td width="82">No Handphone</td>
              <td width="113">JENISKELAMIN</td>
              <td width="79">JURUSAN</td>
              <td width="79"><p>EDIT</p>
              </td>
            </tr>
            <?php 
	include "koneksi.php";
	$query = mysql_query ("select*from tbl_mahasiswa");
	while ($data = mysql_fetch_array($query))
	{
	?>
            <tr>
              <td><?php echo $data ['id']?></td>
			  <td><?php echo $data ['nama']?></td>
              <td><?php echo $data ['alamat']?></td>
              <td><?php echo $data ['nope']?></td>
              <td><?php echo $data ['jeniskelamin']?></td>
              <td><?php echo $data ['jurusan']?></td>
              <td><div align="center"><a href="hapus.php?nama=<?php echo $data['nama'] ?>">Hapus</a> -<a href="edit.php?nama=<?php echo $data['nama'] ?>"> Edit</a></div></td>
              
              <td><div align="center"></div></td></td>
            </tr>
            <?php
	}
	?>
          </table>
		</div>
		<div class="right">SI HX SP </div>
	</div>
	<div class="footer">UAS SP 2015 </div>
</div>

</body>
</html>

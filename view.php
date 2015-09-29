<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #00FF00;
}
body {
	background-color: #FF0000;
}
.style2 {color: #FFFFFF}
.style3 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
}
-->
</style></head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td bgcolor="#0000FF"><div align="center" class="style3">DATA MAHASISWA </div></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="3">
      <tr>
        <td width="10%" bgcolor="#0000FF"><div align="center" class="style2">Nama</div></td>
        <td width="15%" bgcolor="#0000FF"><div align="center" class="style2">No Handphone</div></td>
        <td width="13%" bgcolor="#0000FF"><div align="center" class="style2">Email</div></td>
        <td width="14%" bgcolor="#0000FF"><div align="center" class="style2">Jenis Kelamin</div></td>
		<td width="16%" bgcolor="#0000FF"><div align="center" class="style2">Jurusan</div></td>
		<td width="16%" bgcolor="#0000FF"><div align="center" class="style2">Gambar</div></td>
		<td width="16%" bgcolor="#0000FF"><div align="center" class="style2">Action</div></td>
		</tr>
<?php	
include "koneksi.php";
$query=mysql_query ("select*from tbl_data");  
while($data=mysql_fetch_array ($query)){
?>
	  
      <tr>
        <td bordercolor="#FFFFFF"><div align="center"><?php echo $data ['nama']?></div></td>
        <td><div align="center"><?php echo $data ['nohp']?></div></td>
        <td><div align="center"><?php echo $data ['email']?></div></td>
		
        <td><div align="center"><?php echo $data ['jk']?></div></td>
		<td><?php echo $data ['jrs']?></td>
		<td><div align="center"><img src="gambar/<?php echo $data['gambar']?>" width="100" height="100" /></div></td>
		<td><div align="center"><a href="hapus.php?nama=<?php echo $data['nama'] ?>">Hapus</a> -<a href="edit.php?nama=<?php echo $data['nama'] ?>"> Edit</a></div></td>
	    </tr>
	  <?php
	  }
?>
    </table></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="cetak.php">
  <label>
  <input name="PRINT" type="submit" id="PRINT" value="PRINT" />
  </label>
</form>
</body>
</html>

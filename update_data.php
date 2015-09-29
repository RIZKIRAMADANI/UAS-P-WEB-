<?php
include"koneksi.php";

$nama=$_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$nope = $_REQUEST['nope'];
$jeniskelamin = $_REQUEST['jeniskelamin'];
$jurusan = $_REQUEST['jurusan'];


$update = mysql_query("update tbl_mahasiswa set nama='$nama', alamat='$alamat', nope='$nope', jeniskelamin='$jeniskelamin',jurusan='$jurusan'  where nama='$nama'");

if($update){
	echo "Data Berhasil Dirubah";
}else{
	echo " Data Tidak Berhasil Dirubah";
}



?>
	<script>
	alert('Data Berhasil di Simpan');
	location.href ='tampil.php';
	</script>
<?php

?>
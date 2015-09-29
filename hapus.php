<?php
$nama = $_REQUEST['nama'];

echo $nama;

include"koneksi.php";

$hapus=mysql_query("delete from tbl_mahasiswa where nama = '$nama'");

if($hapus){
	echo "data terhapus";
}else{
	echo "data gagal terhapus";
}

?>
	<script>
	alert('Data Berhasil di hapus');
	location.href ='tampil.php';
	</script>
<?php

?>
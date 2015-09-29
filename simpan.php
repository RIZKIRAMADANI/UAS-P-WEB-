<?php
{
$id= $_POST['id'];
$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$nope= $_POST['nope'];
$jeniskelamin= $_POST['jeniskelamin'];
$jurusan= $_POST['jurusan'];
//memanggikoneksi.php
include "koneksi.php";

//memasukan data kedalamsql query
$query ="INSERT INTO tbl_mahasiswa VALUES (null,'$nama','$alamat','$nope','$jeniskelamin','$jurusan')";
mysql_query($query);
?>
<script>
alert('data berhasil disimpan');
location.href='tampil.php';
</script>
<?php
}
?>


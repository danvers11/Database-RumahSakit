<?php
include "koneksi4.php";
$id=$_REQUEST["id"];
$hapus = "delete from form where idpembayaran = '$id'";
$sql = mysqli_query($koneksi,$hapus);
if ($sql) {
	echo "<script> alert('Data Berhasil Dihapus');
	location.href='tampil4.php'</script>";
}
else{
	echo "<script> alert('Data Gagal Dihapus');
	location.href='tampil4.php'</script>";
}
?>
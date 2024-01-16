<?php
$koneksi=mysqli_connect("localhost", "root", "", "form");

//cek koneksi
if ($koneksi) {
	echo "Koneksi  Berhasil";
}
else {
	echo "Koneksi Gagal";
}
?>
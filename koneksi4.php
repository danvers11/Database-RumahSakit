<?php
$koneksi=mysqli_connect("localhost", "root", "", "rumahsakit");

//cek koneksi
if ($koneksi) {
	// echo "Koneksi  Berhasil";
}
else {
	echo "Koneksi Gagal";
}
?>
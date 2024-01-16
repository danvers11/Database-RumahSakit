<?php
include "koneksi4.php";
$idpembayaran = $_POST["idpembayaran"];

$tanggal = $_POST["tgl"];
$bulan = $_POST["bln"];
$tahun = $_POST["tahun"];
$tanggaltransaksi = $tanggal."-".$bulan."-".$tahun;


$idpasien = $_POST["idpasien"];
$namapasien = $_POST["namapasien"];
$kelasrawatinap = $_POST["kelasrawatinap"];
$dokter = $_POST["dokter"];
$jenisberobat = $_POST["JenisBerobat"];
$lamainap = $_POST["lamaberobat"];
if ($dokter == "Spesialis") {
		$HargaDokter = 150000;
	}
	else if ($dokter == "Umum") {
		$HargaDokter = 50000;
	}
//_________________________________________________________________
	$HargaKelas=0;
	if ($kelasrawatinap == "VVIP") {
		$HargaKelas = 1000000;
	}
	elseif($kelasrawatinap == "VIP") {
		$HargaKelas = 800000;
	}
	elseif($kelasrawatinap == "KELAS 1") {
		$HargaKelas = 600000;
	}
	elseif($kelasrawatinap == "KELAS 2") {
		$HargaKelas = 400000;
	}
	elseif($kelasrawatinap == "KELAS 3") {
		$HargaKelas = 250000;
	}


	$TotalBayar = $HargaKelas + $HargaDokter;
	$Pajak = 10/100 * $TotalBayar;
	$TotalTransaksi = $TotalBayar + $Pajak;





$update = "update form set tanggalpembayaran = '$tanggaltransaksi',idpasien = '$idpasien',namapasien = '$namapasien',kelasrawatinap = '$kelasrawatinap', dokter = '$dokter', jenisberobat = '$jenisberobat', lamaberobat = '$lamainap', biaya = '$TotalTransaksi', fasilitas = '$Fasilitas'  where idpembayaran = '$idpembayaran'";

$sql = mysqli_query($koneksi,$update);

if ($sql) {
	echo "<script> alert('Data berhasil disimpan');
	location.href='tampil4.php'</script>";
}
else{
	echo "<script> alert(Data gagal disimpan');
	location.href='FormPembayaranBerobat.php'<script>";
}
?>
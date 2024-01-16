<?php
include "koneksi4.php";
$idpembayaran = $_POST["idpembayaran"];

$tanggal = $_POST["tgl"];
$bulan = $_POST["bln"];
$tahun = $_POST["thn"];
$tanggaltransaksi = $tanggal."-".$bulan."-".$tahun;


$idpasien = $_POST["idpasien"];
$namapasien = $_POST["namapasien"];
$kelasrawatinap = $_POST["NamaKelas"];
$dokter = $_POST["Dokter"];
$jenisberobat = $_POST["JenisBerobat"];
$lamainap = $_POST["Lama"];


if ($dokter == "Spesialis") {
		$HargaDokter = 150000;
	}
	else if ($dokter == "Umum") {
		$HargaDokter = 50000;
	}
//_________________________________________________________________
	$Fasilitas ='';
	$HargaKelas=0;
	if ($kelasrawatinap == "VVIP") {
		$HargaKelas = 1000000;
		$Fasilitas = "Single Room, Kamar Mandi, AC + remote, TV LCD 32inch + remote, DVD Player + remote, Meja Mayo, Telepon Intercom, Lemari, Lemari Es, Sofa Bed, Set Meja, Bedside Locker, Welcome Drink, Parcel Buah";
	}
	elseif($kelasrawatinap == "VIP") {
		$HargaKelas = 800000;
		$Fasilitas = "Single Room, Kamar Mandi, Shower Set (Hot/Cold), AC + Remote, AC + remote, TV LCD 26inch + remote, DVD Player + remote, Meja Mayo, Telepon Intercom, Lemari Pakaian, Lemari Es, Sofa Bed, Set Meja Tamu, Bedside Locker, Welcome Drink, Parcel Buah";
	}
	elseif($kelasrawatinap == "KELAS 1") {
		$HargaKelas = 600000;
		$Fasilitas ="2 Tempat Tidur/kamar, Kamar Mandi, Shower Set, AC + Remote, TV LCD 32inch + remote, Bedside Locker Meja Mayo, Air Mineral 1,5lt dan 600ml
";
	}
	elseif($kelasrawatinap == "KELAS 2") {
		$HargaKelas = 400000;
		$Fasilitas = "4 Tempat Tidur/kamar, Kamar Mandi, Shower Set, AC + Remote, TV LCD 32inch + remote, Bedside Locker, Meja Mayo, Air Mineral 1,5lt dan 600ml";
	}
	elseif($kelasrawatinap == "KELAS 3") {
		$HargaKelas = 250000;
		$Fasilitas = "6-8 Tempat Tidur/kamar, 1-2 Kamar Mandi, AC + Remote Bedside Locker, Air Mineral 1,5lt dan 600ml";
	}


	$TotalBayar = $HargaKelas + $HargaDokter;
	$Pajak = 10/100 * $TotalBayar;
	$TotalTransaksi = $TotalBayar + $Pajak;

	

	


$simpan = "insert into form (idpembayaran,tanggalpembayaran,idpasien,namapasien,kelasrawatinap,dokter,jenisberobat,lamaberobat, biaya, fasilitas) values ('$idpembayaran','$tanggaltransaksi','$idpasien','$namapasien','$kelasrawatinap','$dokter','$jenisberobat','$lamainap','$TotalTransaksi','$Fasilitas')";

$sql = mysqli_query($koneksi,$simpan);


if ($sql) {
	echo "<script> alert('Data berhasil disimpan');
	location.href='tampil4.php'</script>";}
else{
	echo "<script> alert('Data gagal disimpan);
	location.href='IsiData.php'<script>";
}
?>
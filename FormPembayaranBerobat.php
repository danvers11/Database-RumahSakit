<?php
$NamaKelas = ["VVIP", "VIP", "KELAS 1", "KELAS 2", "KELAS 3"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta charset="UTF-8">
	<title>Form Pembayaran Berobat</title>
	
	<style>
	body{
		background-image: url(7.jpg);
		background-size: cover;
		background-repeat: no-repeat; */
		}
	</style>
</head>
<body>
	

<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">HealtyCenter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="FormPembayaranBerobat.php">Formulir <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil4.php">Lihat Data</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- akhir navbar -->
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<h1 align="center" style="color: red" class="pt-2 pb-2">Data pembayaran</h1>
	
	<form action="simpan4.php" method="POST">

	<table class="table table-bordered bg-light" >  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Properti</th>
      <th scope="col"></th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td align="left">Id Pembayaran</td>
				<td align="center">:</td>
				<td>
					<input type="text" name="idpembayaran"></td>
				</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td align="left">Tanggal Pembayaran</td>
				<td align="center">:</td>
				<td>
					<select name="tgl" id="tgl">
					<?php
					for ($i=1; $i <= 31; $i++) { 
						echo "<option value='$i'>$i</option>";
					}?>
					</select>
					<select name="bln" id="bln">
					<?php
					for ($i=1; $i <= 12; $i++) { 
						echo "<option value='$i'>$i</option>";
					}?>
					</select>
					<input type="text" name="thn" id="tahun"></td>
				</td>
    </tr>

	<tr>
		<th scope="row">3</th>
		<td align="left">Id Pasien</td>
				<td align="center">:</td>
				<td>
					<input type="text" name="idpasien"></td>
				</td>

	</tr>


    <tr>
      <th scope="row">4</th>
      <td align="left">Nama Pasien</td>
				<td align="center">:</td>
				<td>
					<input type="text" name="namapasien"></td>
				</td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td align="left">Kelas Rawat Inap</td>
				<td align="center">:</td>
				<td>
					<select name="NamaKelas" id="NamaKelas">
					<?php foreach ($NamaKelas as $NK): ?>
						<option value="<?= $NK ?>"> <?= $NK ?> </option>				}
					<?php endforeach ?>
					</select>
				</td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td align="left">Dokter</td>
				<td align="center">:</td>
				<td>
					<input type="radio" name="Dokter" id="Dokter" value="Spesialis">Spesialis
					<input type="radio" name="Dokter" id="Dokter" value="Umum">Umum
				</td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td align="left">Jenis Berobat</td>
				<td align="center">:</td>
				<td>
					<input type="radio" name="JenisBerobat" id="JenisBerobat" value="BPJS">BPJS
					<input type="radio" name="JenisBerobat" id="JenisBerobat" value="Asuransi">Asuransi
					<input type="radio" name="JenisBerobat" id="JenisBerobat" value="Cash">Cash
				</td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <td align="left">Lama Inap</td>
				<td align="center">:</td>
				<td><input type="text" name="Lama"></td>
    </tr>
  </tbody>
</table>
		<table align="center">
			<tr>
				<td colspan="3">
			<button type="submit" name="input" class="btn btn-primary">Transaksi</button>
			<button type="submit" name="batal" type="reset" class="btn btn-primary">Batal</button>
				</td>
			</tr>
			</table>

	</form>
	
	</div>
	<div class="col-2"></div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class = "pb-4 pt-4 text-center fixed-bottom bg-light footer">
	<h5>Copyright 2019, Daniel Sandwi. All rights reserved</h5>
	</div>

</body>

</html>

<?php
if (isset($_POST["input"])) {
	$idpembayaran = $_POST["idpembayaran"];
	$tgl = $_POST["tgl"];
	$bln = $_POST["bln"];
	$thn = $_POST["thn"];
	$idpasien = $_POST["idpasien"];
	$namapasien = $_POST["namapasien"];
	$NamaKelas = $_POST["NamaKelas"];
	$Dokter = $_POST["Dokter"];
	$JenisBerobat = $_POST["JenisBerobat"];
	$LamaInap = $_POST["Lama"];
	
//_________________________________________________________________
	if ($Dokter == "Spesialis") {
		$HargaDokter = 150000;
	}
	else if ($Dokter == "Umum") {
		$HargaDokter = 50000;
	}
//_________________________________________________________________
	$HargaKelas=0;
	if ($NamaKelas == "VVIP") {
		$HargaKelas = 1000000;
	}
	elseif($NamaKelas == "VIP") {
		$HargaKelas = 800000;
	}
	elseif($NamaKelas == "KELAS 1") {
		$HargaKelas = 600000;
	}
	elseif($NamaKelas == "KELAS 2") {
		$HargaKelas = 400000;
	}
	elseif($NamaKelas == "KELAS 3") {
		$HargaKelas = 250000;
	}


	$TotalBayar = $HargaKelas + $HargaDokter;
	$Pajak = 10/100 * $TotalBayar;
	$TotalTransaksi = $TotalBayar + $Pajak;

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pembayaran Berobat</title>
</head>
<body>
	<table border="1" align="center" width="400">
		<tr>
			<td colspan="3" align="center">DATA PEMBAYARAN BEROBAT</td>
		</tr>

		<tr>
			<td>Id Pembayaran</td>
			<td>:</td>
			<td><?=$idpembayaran?></td>
		</tr>

		<tr>
			<td>Taggal Pembayaran</td>
			<td>:</td>
			<td><?=$tgl?>/<?=$bln?>/<?=$thn?></td>
		</tr>

		<tr>
			<td>Id Pasiens</td>
			<td>:</td>
			<td><?=$idpasien?></td>
		</tr>

		<tr>
			<td>Nama Pasien</td>
			<td>:</td>
			<td><?= $namapasien?></td>
		</tr>

		<tr>
			<td>Kelas Rawat Inap</td>
			<td>:</td>
			<td><?= $NamaKelas?></td>
		</tr>

		<tr>
			<td>Dokter</td>
			<td>:</td>
			<td><?= $Dokter?></td>
		</tr>

		<tr>
			<td>Jenis Berobat</td>
			<td>:</td>
			<td><?= $JenisBerobat ?></td>
		</tr>

		<tr>
			<td>Lama Inap</td>
			<td>:</td>
			<td><?= $LamaInap ?></td>
		</tr>
		
		<tr>
			<td>Total Bayar</td>
			<td>:</td>
			<td><?= $TotalBayar ?></td>
		</tr>

		<tr>
			<td>Pajak</td>
			<td>:</td>
			<td><?= $Pajak ?></td>
		</tr>
		
		<tr>
			<td>Total Transaksi</td>
			<td>:</td>
			<td><?= $TotalTransaksi ?></td>
		</tr>

	</table>
</body>
</html>
	
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
	body{
		background-image: url(2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}
</style>

	<title>Data Pembayaran Berobat</title>
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
      <li class="nav-item ">
        <a class="nav-link" href="FormPembayaranBerobat.php">Formulir <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
<div align="center"class= "pt-5 pb-5"><h3 style="font-style: oblique; color: #660000 "><b>Data Pembayaran Berobat</h3></div>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<table class="table table-bordered bg-light">  
		<tr align="center"class="table"style="background-color: #ffd95f">
			<td>Id Pembayaran</td>
			<td>Tanggal Pembayaran</td>
			<td>Id Pasien</td>
			<td>Nama Pasien</td>
			<td>Kelas Rawat Inap</td>
			<td>Dokter</td>
			<td>Jenis Berobat</td>
			<td>Lama Inap</td>
			<td>Biaya</td>
			<td>Fasilitas</td>
			<td>Option</td>
		</tr>
		<?php
		Include "koneksi4.php";
		$tampil = "select * from form";
		$sql = mysqli_query($koneksi,$tampil);
		while($data=mysqli_fetch_array($sql)) {
		?>
		<tr>
			<td><?php echo $data["idpembayaran"] ?></td>
			<td><?php echo $data["tanggalpembayaran"] ?></td>
			<td><?php echo $data["idpasien"] ?></td>
			<td><?php echo $data["namapasien"] ?></td>
			<td><?php echo $data["kelasrawatinap"] ?></td>
			<td><?php echo $data["dokter"] ?></td>
			<td><?php echo $data["jenisberobat"] ?></td>
			<td><?php echo $data["lamaberobat"] ?></td>
			<td><?php echo $data["biaya"]?></td>
			<td><?php echo $data["fasilitas"]?></td>
			<td><a href="hapus4.php?id=<?= $data['idpembayaran']?>">Hapus </a> | <a href="edit4.php?id=<?= $data['idpembayaran']?>">Edit</a>
			</td>

		</tr>
		<?php } ?>
	</table>
	<br>
	<div align="center">
	<a class="btn btn-warning" href="FormPembayaranBerobat.php" role="button" align=center>Isi Data Kembali</a>
</div>
	</div>
</div>
<div class="col-2">

</div>
	<div class = "pb-4 pt-4 text-center fixed-bottom bg-light footer">
	<h5>Copyright 2019, Daniel Sandwi. All rights reserved</h5>
	</div>

<!-- 	<table border="1" width="900" class="table"> -->
		

<!-- 	<a href="FormPembayaranBerobat.php">i</a> -->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>


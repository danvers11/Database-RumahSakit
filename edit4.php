<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pembayaran Berobat</title>
	<style type="text/css">
		td
	</style>
</head>
<body>

	<?php
	include "koneksi4.php";
	$idpembayaran = $_REQUEST["id"];
	$tampil = "select * from form where idpembayaran = '$idpembayaran'";
	$sql = mysqli_query($koneksi,$tampil);
	$data = mysqli_fetch_array($sql);
	$tanggal = explode ("-",$data["tanggalpembayaran"]);
	?>


		<form action="update4.php?idpembayaran=<?= $data['idpembayaran'] ?>" method = "POST">
	
		<table border="1" align="center" width="400">
			
			<tr align="center">
				<td colspan="3">Pembayaran Berobat</td>
			</tr>

			<tr>
				<td align="left">Id Pembayaran</td>
				<td align="center">:</td>
				<td><input type="text" name="idpembayaran" value="<?= $data['idpembayaran'] ?>">
				</td>
			</tr>

			<tr>
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
					
						<input type="text" name="tahun" value="<?= $tanggal[2] ?>">
					
				</td>
			</tr>

			<tr>
				<td align="left">Id Pasien</td>
				<td align="center">:</td>
				
					<td><input type="text" name="idpasien" value="<?= $data['idpasien'] ?>">
				</td>
			</tr>

			<tr>
				<td align="left">Nama Pasien</td>
				<td align="center">:</td>
				<td><input type="text" name="namapasien" value="<?= $data['namapasien'] ?>">
				</td>
				</td>
			</tr>

			<tr>
				<td align="left">Kelas Rawat Inap</td>
				<td align="center">:</td>
				<td>
					<input type="radio" name="kelasrawatinap" value="VVIP" <?php if($data['kelasrawatinap']=="VVIP"){ echo "checked=checked";} ?>>VVIP
					<input type="radio" name="kelasrawatinap" value="VIP" <?php if($data['kelasrawatinap']=="VIP"){ echo "checked=checked";} ?>>VIP
					<input type="radio" name="kelasrawatinap" value="KELAS 1" <?php if($data['kelasrawatinap']=="KELAS 1"){ echo "checked=checked";} ?>>KELAS 1
					<input type="radio" name="kelasrawatinap" value="KELAS 2" <?php if($data['kelasrawatinap']=="KELAS 2"){ echo "checked=checked";} ?>>KELAS 2
					<input type="radio" name="kelasrawatinap" value="KELAS 3" <?php if($data['kelasrawatinap']=="KELAS 3"){ echo "checked=checked";} ?>>KELAS 3

				</td>
			</tr>			

			<tr>
				<td align="left">Dokter</td>
				<td align="center">:</td>
				<td>
					<input type="radio" name="dokter" value="Spesialis" <?php if($data['dokter']=="Spesialis"){ echo "checked=checked";} ?>>Spesialis
					<input type="radio" name="dokter" value="Umum"<?php if($data['dokter']=="Spesialis"){ echo "checked=checked";} ?>>Umum
				</td>
			</tr>

			<tr>
				<td align="left">Jenis Berobat</td>
				<td align="center">:</td>
				<td>
					<input type="radio" name="JenisBerobat" value="BPJS"<?php if($data['jenisberobat']=="BPJS"){ echo "checked=checked";} ?>>BPJS
					<input type="radio" name="JenisBerobat" value="Asuransi"<?php if($data['jenisberobat']=="Asuransi"){ echo "checked=checked";} ?>>Asuransi
					<input type="radio" name="JenisBerobat" value="Cash"<?php if($data['jenisberobat']=="Cash"){ echo "checked=checked";} ?>>Cash
				</td>

			<tr>
				<td align="left">Lama Inap</td>
				<td align="center">:</td>
				<td><input type="text" name="lamaberobat" value="<?= $data['lamaberobat'] ?>">
				</td>
			</tr>

			<tr align="center">
				<td colspan="3">
					<button name="input" type="submit">Transaksi</button>
					<button name="batal" type="reset">Batal</button>
				</td>
			</tr>

		</table>
	</form>
	<br>
	<br>
	<a href="tampil4.php">Lihat Data</a>
</body>
</html>


<?php
	session_start();
	$error ='';
	if (isset($_POST['ButtonLogin'])) 
	{
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
			echo "<script>alert('Username dan Password kosong!!');
				location.href='FormLogin.php';</script>";
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			include "koneksi4.php";

			$query = mysqli_query($koneksi, "SELECT * FROM login WHERE Password = '$password' AND Username = '$username'");

			$rows = mysqli_num_rows($query);

			if ($rows == 1)
			{
				$_SESSION['login_user'] = $username;
				header("location:tampil4.php");
			}
			else
			{
				echo "<script>alert('User dan Passord salah!!');
				location.href='FormLogin.php';</script>";
			}
			mysql_close($koneksi);
		}
	}
?>
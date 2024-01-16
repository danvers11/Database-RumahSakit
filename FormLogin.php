<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Login</title>
</head>
<body>
	<form action="ProsesLogin.php" method="POST">
		<table border="3" align="center">
		<tr>
			<td align="center" colspan="3">Form Login</td>
		</tr>

		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text"  name="username"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name="password"></td>
		</tr>

		<tr align="center">
			<td colspan="3">
				<button type="submit" name="ButtonLogin">Login</button>
				<button type="reset" name="batal">Batal</button>
			</td>
		</tr>
		</table>
	</form>
</body>
</html>
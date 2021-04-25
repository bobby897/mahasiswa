<?php 
require 'Function.php';
$mahasiswa=query("SELECT * FROM mahasiswa")
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login Kemahasiswaan </title>
</head>
<body>
	<a href="tambah_data.php">Tambah Data Mahasiswa</a>
<form action="Latihan.php" method="post">
	 <table>
 	<tr>
 	<td>Nim :</td><td></td><td><input type="text" name="nim"></td>
 	</tr>
 	<tr>
 	<td>Password :</td><td></td><td><input type="password" name="password"></td>
	</tr>
	<tr><td></td><td></td><td rowspan="3"><input type="submit" name="" value="Login"></td></tr>
 </table>

</form>
</body>
</html>
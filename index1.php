<?php 
require 'Function.php';

if ($_POST){
	$password=$_POST['password'];
$mahasiswa=query("SELECT * FROM `mahasiswa` Where Password='$password'");
	
}if ($_POST){
$username=$_POST['nim'];
$mahasiswa=query("SELECT * FROM `mahasiswa` Where Nim='$username'"); 
}


if(isset($_POST['submit']))
	{
		//cek  sukses tambah data menggunakan function tambah data pada funtion.php
		if(Login($_POST) > 0)
		{
			echo "<script>
					alert('Anda berhasil Login');
					document.location.href='Latihan.php';
					</script>
			";
		}else{
			echo "<script>
					alert('Anda Gagal Login');
					document.location.href='index1.php';
					</script>
					";
					echo "<br>";
					echo mysqli_error($conn);
		}

	}


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
 	<td>Nim :</td><td></td><td><input type="text" name="nim" placeholder="Masukkan Nim"></td>
 	</tr>
 	<tr>
 	<td>Password :</td><td></td><td><input type="password" name="password" placeholder="Masukkan Password"></td>
	</tr>
	<tr><td></td><td></td><td rowspan="3"><input type="submit" name="submit" value="Login"></td></tr>
 </table>

</form>
</body>
</html>
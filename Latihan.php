<?php 

require 'Function.php';
$mahasiswa=query("SELECT * FROM mahasiswa");

if(isset($_POST["cari"])){
	$mahasiswa=cari($_POST["keyword"]);
}if ($_POST){
	$password=$_POST['password'];
$mahasiswa=query("SELECT * FROM `mahasiswa` Where Password='$password'");
	
}if ($_POST){
$username=$_POST['nim'];
$mahasiswa=query("SELECT * FROM `mahasiswa` Where Nim='$username'"); 
}


//echo $sql;
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divece-width, inital-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dokument</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah_data.php">Tambah Data Mahasiswa</a> <br>
	<h2>Daftar Matakuliah</h2>
	<a href="list_makul.php">Daftar Matakuliah</a>
	<form action="" method="post">
<?php foreach($mahasiswa as $row): ?>
<?php endforeach; ?>
	<td>Nim :</td><td></td><td><input type="text" name="keyword"></td>
	<tr><td></td><td></td><td><input type="submit" name="cari" value="Search"<?php// echo $row['Nama'] ?> </td></tr>


	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Gambar</th>
		<th>Aksi</th>
	</tr>
	<!-- contoh data base static -->
<!-- 	<tr>
		<td>1</td>
		<td>Dino</td>
		<td>123456789</td>
		<td>dino@gmail.com</td>
		<td>Informatika</td>
		<td> <img src="img/dina.jpg" alt="srcset=""></td>
		<td>
			<a href="">Edit</a>
			<a href="">Hapus</a>
		</td>
	</tr>	
 -->	
<?php $i=1; ?>
 <?php foreach ($mahasiswa as $row){ ?>
<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['Nama']; ?></td>
		<td><?php echo $row['Nim']; ?></td>
		<td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Jurusan']; ?></td>
		<td> <img src="img/dina.jpg" alt="" height="80px" width="100px"></td>
		<td>
			<a href="editmahasiswa.php?nim=<?php echo $row['Nim'] ?>">Edit</a>
			<a href="hapus.php?nim=<?php echo $row['Nim']?>" onclick="return confirm('Apakah Data Ini Akan Di hapus')">Hapus</a>
			<a href="list_mahasiswa.php?nim=<?php echo $row['Nim'] ?>">List MK</a>
		</td>
	</tr>
	
<?php $i++; } ?>
	</table>
</body>
</html>
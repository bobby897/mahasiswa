<?php 
	require 'Function.php';
	//cek apakah button summit sudah di tekan atau belum.
	if(isset($_POST['submit']))
	{
		//cek  sukses tambah data menggunakan function tambah data pada funtion.php
		if(tambah($_POST) > 0)
		{
			echo "<script>
					alert('data berhasil di simpan');
					document.location.href='Latihan.php';
					</script>
			";
		}else{
			echo "<script>
					alert('data gagal di simpan');
					document.location.href='tambah_data.php';
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<ul>
			<li>
				<!-- for pada label terhubung dengan id jadi jika label nama di klik maka texfield nama akan aktif juga -->
				<label for="Nama">Nama</label>
				<!-- untuk pngisihan name besar kecilnya harus sesuai dengan fieldnya -->
				<input type="text" name="Nama" id="Nama" required>
			</li>
			<li>
				<label for="Nim">Nim</label>
				<input type="text" name="Nim" id="Nim" required>
			</li>
			<li>
				<label for="Email">Email</label>
				<input type="text" name="Email" id="Email" required>
			</li>
			<li>
				<label for="Jurusan">Jurusan</label>
				<input type="text" name="Jurusan" id="Jurusan" required>
			</li>
			<li>
				<label for="Gambar">Gambar</label>
				<input type="text" name="Gambar" id="Gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>

	</form>
</body>
</html>
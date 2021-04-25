<!-- <?php 
require 'Function.php';
//cek apakah button submit sudah di tekan atau belum

$id=$_GET['id'];
//var_dump($id);
$mahasiswa=query("SELECT * FROM mahasiswa WHERE id=$id");
//var_dump($mahasiswa);

if(isset($_POST['submit']))
{
	if(edit($_POST)>0)
	{
	echo "<script>
					alert('data berhasil di edit');
					document.location.href='Latihan.php';
					</script>
			";
		}else{
			echo "<script>
					alert('data gagal di edit');
					document.location.href='edit.php';
					</script>
					";
					echo "<br>";
					echo mysqli_error($conn);
		}

}

//$id=$_GET['id'];
//var_dump($id);
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Update Data</title>
</head>
<body>
	<h1>Update Data Mahasiswa</h1>
	<form action="Latihan.php" method="post">
		<ul>
			<li>
				for pada label terhubung dengan id jadi jika label nama di klik maka texfield nama akan aktif juga
				<label for="Nama">Nama</label>
				<!-- untuk pngisihan name besar kecilnya harus sesuai dengan fieldnya
				<input type="text" name="Nama" id="Nama" value="<?=$mahasiswa['Nama']; ?>">
			</li>
			<li>
				<label for="Nim">Nim</label>
				<input type="text" name="Nim" id="Nim" required value="<?=$mahasiswa['Nim']; ?>">
			</li>
			<li>
				<label for="Email">Email</label>
				<input type="text" name="Email" id="Email" required value="<?=$mahasiswa['Email']; ?>">
			</li>
			<li>
				<label for="Jurusan">Jurusan</label>
				<input type="text" name="Jurusan" id="Jurusan" required value="<?=$mahasiswa['Jurusan']; ?>">
			</li>
			<li>
				<label for="Gambar">Gambar</label>
				<input type="text" name="Gambar" id="Gambar" required value="<?=$mahasiswa['Gambar']; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Update</button>
			</li>
		</ul>

	</form>
</body>
</html> --> -->
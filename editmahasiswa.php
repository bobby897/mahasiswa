<?php 
require 'Function.php';
if ($_POST){
	$nama=$_POST['nama'];
	//$nim=$_POST['nim'];
$mahasiswa=query("SELECT * FROM `mahasiswa` Where Nama='$nama'");
	
}else{
//$nama=$_GET['nama'];
$nim=$_GET['nim'];
$mahasiswa=query("SELECT * FROM `mahasiswa` Where Nim='$nim'"); 
}
//$nama=$_GET['Nama'];
//cek apakah button submit sudah di tekan atau belum

//$id=$_GET['nim'];
//var_dump($id);
//$mahasiswa=query("SELECT * FROM mahasiswa WHERE id=$id");
 var_dump($_POST);

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
					document.location.href='editmahasiswa.php';
					</script>
					";
					echo "<br>";
					echo mysqli_error($conn);
		}

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Mahasiswa</title>
 </head>
 <body>
 <!-- <?php $i=1; ?>
 <?php foreach ($mahasiswa as $row){ ?>
 -->
 <!-- <form method="get" action="Latihan.php">
  -->	
 <?php// echo $_POST['nim']; ?>
  <table>
<?php foreach ($mahasiswa as $row)
	//if($row['Nim'] == $_POST['nim'])

{ ?>
<!-- <li>
	<input type="hidden" name="id" value="<? echo $row['id']; ?>" >

</li>
 -->
<form method="post" action="editmahasiswa.php">
 <tr>
		<td>Nama :</td><td></td><td><input type="text" name="Nama" value="<?php echo $row['Nama']; ?>" ></td>
		<tr></tr>
		<td>Nim :</td><td></td><td><input type="text" name="Nim" value="<?php echo $row['Nim']; ?> " readonly ></td>
		<tr></tr>
		<td>Jurusan :</td><td></td><td><input type="text" name="Jurusan" value="<?php echo $row['Jurusan']; ?>"></td>
		<tr></tr>
		<td>Email :</td><td></td><td><input type="text" name="Email" value="<?php echo $row['Email']; ?>"></td>
		</tr>
				<li>
				<button type="submit" name="submit" value="edit">Update</button>
			</li>
	
</form> 
<!-- <?php $i++; } ?>
 -->
 <?php } ?>
 	</table>
 </body>
 </html>
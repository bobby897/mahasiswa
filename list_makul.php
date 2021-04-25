<?php 

require 'Function.php';
$mahasiswa=query("SELECT * FROM m_makul")

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>List Matakuliah</title>
 </head>
 <body>
 <!-- <?php $i=1; ?>
 <?php foreach ($mahasiswa as $row){ ?>
 -->
 <!-- <form method="get" action="Latihan.php">
  -->	
 <?php// echo $_POST['nim']; ?>
  <table>
<?php //foreach ($mahasiswa as $row)
	//if($row['Nim'] == $_POST['nim'])

//{ ?>
<!-- <li>
	<input type="hidden" name="id" value="<? echo $row['id']; ?>" >

</li>
 -->
 <?php $i=1; ?>
<form method="post" action="editmahasiswa.php">
 <tr>
		<td>ID :</td><td></td><td><input type="text" name="Id" value="<?php echo $row['id']; ?>" ></td>
		<tr></tr>
		<td>Nama Matakuliah :</td><td></td><td><input type="text" name="Nama_Makul" value="<?php echo $row['nama_makul']; ?> " ></td>
		<tr></tr>
		<td>Jumlah SKS :</td><td></td><td><input type="text" name="Jml_Sks" value="<?php echo $row['jml_sks']; ?>"></td>
		<tr></tr>
		</tr>
				<li>
				<!-- <button type="submit" name="submit" value="edit">Update</button>
			 --></li>
	
</form> 
<!-- <?php $i++; } ?>
 -->
 <?php //} ?>
 	</table>
 </body>
 </html>
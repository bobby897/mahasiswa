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
  <table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Nama Mata Kuliah</th>
		<th>Jumlah SKS</th>
	</tr>
<?php $i=1; ?>
 <?php foreach ($mahasiswa as $row){ ?>

 <tr>
		
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['nama_makul']; ?></td>
		<td><?php echo $row['jml_sks']; ?></td>
		</td>
	</tr>


 <?php } ?>
 	</table>
 </body>
 </html>
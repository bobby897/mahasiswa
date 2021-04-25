<?php 
require 'Function.php';
$id=$_GET['nim'];
if(hapus($id) > 0){
	echo "<script>
			alert('Data berhasil Di hapus');
			document.location.href='Latihan.php';
			</script>
	";
}else{
	echo "<script>
			alert('Data gagal Di hapus');
			document.location.href='Latihan.php';
			</script>
	";
	echo "<br>";
	echo mysqli_error($conn);
}

 ?>
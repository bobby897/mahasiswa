<?php  
//membuat koneksi
$conn=mysqli_connect("localhost", "root", "", "Latihan");
//ambil koneksi
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
//function query akan menerima isi parameter dari string euqery yg ada pada latihan.php
function query($query_kedua){
	global $conn;
$result=mysqli_query($conn,$query_kedua);
$rows=[];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[]=$row;
}
return $rows;
}

function tambah($data){
	global $conn;
	$nama=$data["Nama"];
	$nim=$data["Nim"];
	$email=$data["Email"];
	$jurusa=$data["Jurusan"];
	$gambar=$data["Gambar"];

		$query="INSERT INTO mahasiswa VALUES ('','$nama','$nim','$email','$jurusan','$gambar')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE Nim=$id");
	return mysqli_affected_rows($conn);
}


function edit($data){
	global $conn;
	
	$nama=htmlspecialchars($data["Nama"]);
	$nim=htmlspecialchars($data["Nim"]);
	$email=htmlspecialchars($data["Email"]);	
	$jurusan=htmlspecialchars($data["Jurusan"]);
	$gambar=htmlspecialchars($data["Gambar"]);

	$query="UPDATE mahasiswa SET
			Nama='$nama',
			Nim='$nim',
			Email='$email',
			Jurusan='$jurusan',
			Gambar='$gambar'
			WHERE Nim=$nim";
			//echo $query;
			mysqli_query($conn,$query);

			return mysqli_affected_rows($conn);

}

function cari($keyword){
	$sql="SELECT * FROM mahasiswa
	WHERE
	Nama LIKE '%$keyword%' OR 
	Nim LIKE '%$keyword%' OR 
	Email LIKE '%$keyword%' OR 
	Jurusan LIKE '%$keyword%' ";
	echo $sql;
	return query($sql);

}
//ambil data mahaiswa dari database
//$mhs=mysqli_fetch_row($result);
//while ($mhs=mysqli_fetch_assoc($result)){
//var_dump($mhs);	
//}

//$mhs=mysqli_fetch_array($result);
//$mhs=mysqli_fetch_object($result);

?>
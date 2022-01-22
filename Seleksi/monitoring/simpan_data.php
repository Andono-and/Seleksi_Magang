<?php
include "koneksi.php";
?>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
 
if(isset($_POST['submit'])) {    
    $id  	        = $_POST['id'];    
    $nama_project 	= $_POST['nama_project'];
    $perusahaan 	= $_POST['perusahaan'];
    $nama     	    = $_POST['nama'];
    $email    	    = $_POST['email'];
	$start    = $_POST['start'];
	$end     = $_POST['end'];
	$progress    = $_POST['progress'];
	$file_foto    = $_POST['file_foto'];
        
	$sql = "INSERT project SET nama_project='$nama_project', perusahaan='$perusahaan', 
	nama='$nama', email='$email', start='$start',
	end='$end',progress = '$progress', file_foto='$file_foto' WHERE id=$id";

	$data = mysqli_query($conn, $sql);
	if($data) echo "<font color='green'>Data monitoring berhasil ditambah.</font>";
	else echo "<font color='red'>Data monitoring gagal ditambah.</font>";
	echo "<br/><a href='index.php?page=managemen'>Lihat hasil!</a>";
}
?>
</body>
</html>
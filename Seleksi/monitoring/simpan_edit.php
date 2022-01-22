<?php
include "koneksi.php";
 
if(isset($_POST['update'])){    
    $id  	        = $_POST['id'];    
    $nama_project 	= $_POST['nama_project'];
    $perusahaan 	= $_POST['perusahaan'];
    $nama     	    = $_POST['nama'];
    $email    	    = $_POST['email'];
	$start     = $_POST['start'];
	$end     = $_POST['end'];

	$sql = "UPDATE project SET nama_project='$nama_project', perusahaan='$perusahaan', 
            nama='$nama', email='$email', start='$start',
            end='$end' WHERE id=$id";
				
	$data = mysqli_query($conn, $sql);
	if($data) echo "<font color='green'>Data monitoring berhasil diubah.</font>";
	else echo "<font color='red'>Data monitoring gagal diubah.</font>";
	echo "<br/><a href='index.php?page=managemen'>Lihat hasil!</a>";
}
?>

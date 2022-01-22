<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "SELECT * FROM project WHERE id = $id";
$data = mysqli_query($conn, $sql);
 
while($d = mysqli_fetch_array($data)){
    $nama_project   = $d['nama_project'];
    $perusahaan  	= $d['perusahaan'];
    $nama      	    = $d['nama'];
    $email          = $d['email'];
    $start     = $d['start'];
	$end     = $d['end'];
}
?>

<center><h1>Edit Data Monitoring Project</h1>
<form action="index.php?page=simpan_edit" name="FORM" method="POST">
	<table border="0">
			<tr>
                <td>Project Name</td>
                <td><input type="text" name="nama_project" value="<?php echo $nama_project;?>" size="30"></td>
            </tr>
            <tr>
                <td>Client</td>
                <td><input type="text" name="perusahaan" value="<?php echo $perusahaan;?>" size="30"></td>
            </tr>
            <tr>
                <td>Project Leader</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="email" value="<?php echo $email;?>" size="30"></td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td><input type="text" name="start" value="<?php echo $start;?>" size="30"></td>
            </tr>
			 <tr>
                <td>End Date</td>
                <td><input type="text" name="end" value="<?php echo $end;?>" size="30"></td>
            </tr>
		<tr>
			<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			<td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form></center>
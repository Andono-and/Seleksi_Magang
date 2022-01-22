<html>
	<head>
		<title>Seleksi Magang Kampus Merdeka</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<center>
		<div class="header">
			<div class="logo">
				<div class="judul">Monitoring Project</div>
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
		</div>
		<div class="content">
			<div class="box-konten kiri">
				<div class="menu-kiri">
					<ul>
						<li><a href="index.php?page=home">Home</a></li>
						<li class='active has-sub'><a href="#">Monitoring</a>
							<ul>
								<li class='has-sub'><a href="index.php?page=monitoring">Monitoring</a></li>
							</ul></li>
						<li class='active has-sub'><a href="#">Tambah Data</a>
							<ul>
								<li class='has-sub'><a href="index.php?page=tambah_data">Data</a></li>
							</ul>
				</div>
			</div>
			<div class="box-konten kanan">
				<div class="konten">
				<?php
					if(!empty($_GET['page'])){
					$hal=$_GET['page'];
					switch($hal){
						case "user" : include "user.php"; break;
						case "user_tambah" : include "user_tambah.php"; break;
						case "user_tambah_simpan" : include "user_tambah_simpan.php"; break;
						case "user_edit" : include "user_edit.php"; break;
						case "user_edit_simpan" : include "user_edit_simpan.php"; break;
						case "user_hapus" : include "user_hapus.php";break;	
						case "monitoring" : include "monitoring/monitoring.php"; break;
						case "tambah_data" : include "monitoring/tambah_data.php"; break;
						case "simpan_data" : include "monitoring/simpan_data.php"; break;
						case "edit" 	 : include "monitoring/edit.php"; break;
						case "simpan_edit" : include "monitoring/simpan_edit.php"; break;
						case "hapus" 	 : include "monitoring/hapus.php"; break;
								
						default:
						include "home.php";
						break;
						
					}
					}
					else{
						"home.php";
					}
				?>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>
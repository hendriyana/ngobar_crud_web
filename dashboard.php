<?php 
	session_start();
  if (!isset($_SESSION['login'])) {
    header("Location: login.php");
  }

  //Koneksi Database
  include "koneksiDB.php";
?>

<html>
<head>
	<title>Main Menu</title>
</head>
<script type="text/javascript" src="style.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<body id="bodymain" onload="InitBody()">
		<!-- Page Login -->
		<h1>LOGIN BERHASIL</h1>
		<?php
			echo "<p>Selamat datang, <b>".$_SESSION['username']."</b></p>";

		?>
		<form action="logout.php">
			<button class="reset" type="submit" >Logout</button>
			<!-- <a href="logout.php">logout</a> -->
		</form>
		

		<!-- Script PHP SELECT -->
		<?php 

			// Query Select untuk menampilkan tabel mahasiswa
			$sql = mysqli_query($conn,"SELECT * FROM tabel_mahasiswa");

			// Menampilkan tabel pada web
			echo"<table border='1'>";
			echo"<tr>
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>No.  HP</th>
				<th>ACTION</th>
			</tr>";
			
			$i = 1;

			// Menggunakan looping untuk mengambil data dari database dan ditampilkan pada table
			while ($data = mysqli_fetch_array($sql)) {
				echo "<tr>";
				echo "<td>".$i++."</td>";
				echo "<td>".$data["nama_lengkap"]."</td>";
				echo "<td>".$data["alamat"]."</td>";
				echo "<td>".$data["jenis_kelamin"]."</td>";
				echo "<td>".$data["nohp"]."</td>";
				echo "<td><a href=edit.php?id=$data[id_mhs]>Edit</a> | <a href=hapus.php?id=$data[id_mhs].'>Delete</a> </td>";
				echo "</tr>";
				
			}
			echo "</table>";
		?>
		<form action="tambah_data.php">
			<input type="submit" value="Tambah Data">
		</form>

		<!-- <button><a href="tambah_data.php">Tambah Data</a></button> -->

		
	
		<!-- $query 	= mysql_query(“QUERY DATA YANG DITAMPILKAN");
Looping sebanyak $data = mysql_fetch_array($query)
{
   tampilkan array data;
} -->


		<!-- Foreach Table -->
    
</body>

</html>	

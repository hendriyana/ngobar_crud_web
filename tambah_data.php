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
    <style>
        input {
            color: black !important;
            background-color: white;
            box-shadow: 1px 8px 32px -6px rgba(0,0,0,0.33);
        }
    </style>
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
		

		<!-- FORM INPUTAN -->
        <h1>form</h1>
        
    
<form action="insert_sql.php" method="post">
    <table>  
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
        </tr>
        <!-- <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" >
                    <option value="M">Male</option>
                </select>
            </td>
        </tr> -->
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" >
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td>
                <input type="text" name="no_hp">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="SIMPAN">
            </td>
        </tr>
    </table>
</form>

</body>
</html>	

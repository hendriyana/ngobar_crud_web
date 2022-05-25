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
		<!-- <h1>LOGIN BERHASIL</h1>
		<?php
			echo "<p>Selamat datang, <b>".$_SESSION['username']."</b></p>";

		?>
		<form action="logout.php">
			<button class="reset" type="submit" >Logout</button>
		</form> -->
		
		<!-- FORM INPUTAN -->
        <h1>FORM EDIT</h1>
        
        <?php
            // Mengambil / menampilkan data mahasiswa dengan id yang dipilih
            $id = $_GET['id'];
            // echo $id;
            $sql = mysqli_query($conn,"SELECT * FROM tabel_mahasiswa WHERE id_mhs = '".$id."'");
            $data = mysqli_fetch_array($sql);
        ?>
<form action="update_sql.php" method="post">
    <table>  
        <input type="hidden" name="id" value="<?php echo $data['id_mhs'] ?>">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <!-- Value input diambil dari database dengan menggunakan echo -->
            <td><input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <!-- Value input diambil dari database dengan menggunakan echo -->
            <td><textarea name="alamat" cols="30" rows="10"><?php echo $data['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <!-- Value input diambil dari database dengan menggunakan echo -->
            <td>
                <select name="jenis_kelamin" valu > 
                    <option value="<?php $data['jenis_kelamin']?>"><?php echo $data['jenis_kelamin']?></option>

                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <!-- Value input diambil dari database dengan menggunakan echo -->
            <td>
                <input type="text" name="no_hp" value="<?php echo $data['nohp'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="UPDATE">
            </td>
        </tr>
    </table>
</form>

</body>
</html>	

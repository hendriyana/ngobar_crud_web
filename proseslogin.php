<?php
	// memasukkan dan menjalankan script koneksi
    include "koneksiDB.php";

    // cek kondisi 'ini gatau apa wkwk'
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$username = $_POST['username'];
        $password = $_POST['password'];

        // echo $username;
        // echo "\n";
        // echo $password;
		
		if ($username == '' || $password == '') { //username dan password kosong
			echo "Form belum lengkap!!";
		} else {	
			$login = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
			// $con = 
            // $login = mysqli_query($conn, "SELECT * FROM tbl_user");
            // echo "<br>";
			$check = mysqli_num_rows($login);
            // echo "Jumlah Data ".$jumlah;
            
			// cek apa ada data dengan username dan password yang sesuai
			if ($check > 0) 
            {
				session_start();
				$data = mysqli_fetch_assoc($login);

		        $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				//$_SESSION['nama_lengkap'] = $nama_lengkap;
                // $_SESSION['ses_user'] = $username;
				
                header('location:dashboard.php'); //Sukses
			} 
            else 
            {
				header('location:index.php');
			}
		}
	}
?>
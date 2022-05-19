<?php
session_start();
  if (!isset($_SESSION['login'])) {
    header("Location: login.php");
  }

  //Koneksi Database
  include "koneksiDB.php";

//   echo $_POST['nama_lengkap']."<br>";
//   echo $_POST['alamat']."<br>";
//   echo $_POST['jenis_kelamin']."<br>";
//   echo $_POST['no_hp']."<br>";
    
  // Karena pada from input menggunakan method post maka untuk mengambil datanya juga kita menggunakan $_POST[name]

  // Mendapatkan data dari hasil input form
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['nama_lengkap'];
    $address = $_POST['alamat'];
    $gender = $_POST['jenis_kelamin'];
    $telp = $_POST['no_hp'];
    
    // Kondisi jika form tidak diisi atau tidak lengkap
    if ($fullname == '' || $address == '' || $gender == '' || $telp == ''){
      echo "Form belum lengkap! Please lengkapin beb! Uhuy :*";		//hmmph (^~^)
    } else {
      // Menggunakan query insert untuk menyimpan data hasil input form ke database
      $save = mysqli_query($conn, "INSERT INTO tabel_mahasiswa(nama_lengkap,alamat,jenis_kelamin,nohp) VALUES ('$fullname','$address','$gender','$telp')");
      
      // Kondisi jika ada kegagalan atau kesalahan pada saat insert data
      if(!$save){
        echo "Simpan data gagal!!!";
        // echo mysql_error($conn);
      }else{
        header('location:dashboard.php');
      }
    } 
  }
?>
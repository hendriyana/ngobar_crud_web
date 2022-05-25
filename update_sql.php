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
    $id = $_POST['id'];
    
    // Kondisi jika form tidak diisi atau tidak lengkap
    if ($fullname == '' || $address == '' || $gender == '' || $telp == '') {
        echo "Form belum lengkap! Please lengkapin beb! Uhuy :*";		//hmmph... 🐔(^~^)
    } else {
        // Menggunakan query update untuk mengubah data
        $save = mysqli_query($conn, 
        "UPDATE tabel_mahasiswa SET 
        nama_lengkap = '$fullname',
        alamat = '$address',
        jenis_kelamin ='$gender',
        nohp = '$telp' 
        WHERE id_mhs ='$id' ");
        
        // Kondisi jika ada kegagalan atau kesalahan pada saat insert data
        if(!$save){
            echo "Update data gagal!!!";
        }
        else
        {
            header('location:dashboard.php');
        }
    } 
}
?>
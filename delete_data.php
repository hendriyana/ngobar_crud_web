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

// Mendapatkan dataR['REQUEST_METHOD'] == 'POST') {
    // Karena mengambil data jadi menggunakan get
    $id = $_GET['id'];
    
    $sql = "DELETE FROM tabel_mahasiswa WHERE id_mhs ='2'";
    
    $delete = mysqli_query($conn, $sql);
    
    // Kondisi jika ada kegagalan atau kesalahan pada saat insert data
    if(!$delete){
        echo "Delete data gagal!!!";
    }
    else
    {
        header('location:dashboard.php');
    }
?>
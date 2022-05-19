<?php
    $nama_database  = "db_rpl_2022";
    $namaserver     = "localhost";
    $username       = "root";
    $password       = "";
    $conn = mysqli_connect($namaserver,$username,$password);
    mysqli_select_db($conn,$nama_database) or die ("Database tidak ditemukan");
    // echo "Berhasil terkoneksi ke database ".$nama_database;
?>
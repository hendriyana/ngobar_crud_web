<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- Bismillah -->
    <!-- Bantu Doa -->
    <!-- Semangat semuanya -->
    <!-- 2 -->
    <!-- Speedrun with temen kelas -->
    <?php

        //Latihan 1 Seleksi Kondisi

        //1. Menentukan bilangan ganjil dan genap
        //Variabel angaka
        $angka = 3.141592653589793238462643383279028841971693993751058209749445923078164062862089986280348253421170679;
        // True condition (Jika dibagi 2 akan habis atau 0 (% adalah modulus))
        if ($angka % 2 == 0) { 
            echo "Bilangan ".$angka." Merupakan Bilangan <b>GENAP</b>";
        }
        // False condition
        else {
            echo "Bilangan ".$angka." Merupakan Bilangan <b>GANJIL</b>";
        }
    ?>
    

        <br>
        <h1>Latihan Switch Bulan</h1>
    <?php
        //2. Switch (untuk menentukan nama bulan)
        // Variabel bulan
        $bulan = 13; //Nilai variabel Bulan
        switch ($bulan) {
            case 1: // Case nilai variabel bulan = 1
                echo('January');
                break;
            
            case 2: // Case nilai variabel bulan = 2
              echo('February');    
              break;
              
            case 3: // Case nilai variabel bulan = 3
                echo('Maret');
                break;
            
            case 4: // Case nilai variabel bulan = 4
                echo("April");
                break;
                
            case 5: // Case nilai variabel bulan = 5
                echo("Mei");
                break;
                
            case 6: // Case nilai variabel bulan = 6
                echo("Juni");
                break;
                
            case 7: // Case nilai variabel bulan = 7
                echo("Juli");
                break;
                
            case 8: // Case nilai variabel bulan = 8
                echo("Agustus");
                break;
            
            case 9: // Case nilai variabel bulan = 9
                echo("September");
                break;
            
            case 10: // Case nilai variabel bulan = 10
                echo("Oktober");
                break;
            
            case 11: // Case nilai variabel bulan = 11
                echo("November");
                break;
            
            case 12: // Case nilai variabel bulan = 12
                echo('Desember');
                break;
            
            default: // Nilai default (jika nilai variabel bulan tidak ada atau tidak sesuai)
                echo('Tidak ada bulan, adanya matahari. Gunakan penanggalan kalender suku maya!');
                echo('(^~^)');
                
                break;
            }
    ?>

    <h1>LOOPING</h1>
    <?php
        // Looping dengan For
        // Menentukan variabel ulang untuk jumlah perulangan
        $ulang = 5;
        // Menjalankan perulangan
        for ($i=1; $i <= $ulang ; $i++) { 
            echo "Haloo Faris ke-".$i."<br>";
        }
        
        // Looping Array
        echo"<h2>For Each</h2>";
        // Membuat dan memberikan nilai untuk tiap indeks array
        $nama_game = array("menkrep","APEK LEJEN", "Abid Bocil Ganggu", "Genshin Impact game burik", "Dora Petualang","surya the last soulbander", "nopal gamink");
        // Menggunakan looping foreach untuk menampilkan tiap indeks array
        foreach ($nama_game as $key => $item)
        {
            echo "Nama Game: ".$item."<br>";
        }
    ?>  

    <h1>Latihan Array</h1>
    <?php
        // Associative Arrays
        // Rumus Penulisan
        // $nama_variabel = array(
        //     “nama_string_1”=>”value-1”,
        //     “nama_string_2”=>”value-2”,
        //     …,
        //     “nama_string_n”=>”value-n”);

        $prodi = array(
            "RPL"=>"Rekayasa Perangkat Lunak",
            "Tekom"=>"Teknik Komputer",
            "PGSD"=>"Pendidikan Guru Sekolah Dasar",
            "PGPAUD"=>"Pendidikan Guru Anak Usia Dini",
            "Mulmed"=>"Pendidikan Multimedia"
        );

        // Menampilkan value dengan memanggil nama string
        echo "Prodi pilihan --> ".$prodi["Mulmed"];
        
        // 
    ?>

    <h1>FUNCTION</h1>
    <?php
        // Membuat fungsi
        function nama($nama)
        {
            return "Nama Saya ".$nama;
        }

        // Memanggil fungsi 
        echo"Hi! Broo... kenalin, ".nama("Adrian");
        
    ?>






    <!-- Selamat menempuh hidup baru -->
    <!-- Alhamdulillah -->

    <!-- Unused
        F
        LATIHAN
        komponen_hw = Motherboard B640M, CPU I7-10700, Nvidia Grapic Card RTX 3070, PSU Seasonic 750W, SSD 512
                 $komponen_hw = array("Motherboard B460M","Central Processing Unit i7-10700","Nvidia Graphic Card RTX 3070","PSU Seasonic 750W","SSD 512");
                foreach ($komponen_hw as $item) {
        echo($item."<br>");
        } 
     -->
</body>
</html>
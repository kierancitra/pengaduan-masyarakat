<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;
            
        case 'lihat-pengaduan':
            include 'lihat-pengaduan.php';
            break;

        case 'detail-pengaduan':
            include 'detail-pengaduan.php';
            break;

        case 'lihat-tanggapan':
            include 'lihat-tanggapan.php';
            break;    

        default:
            echo "Halaman Tidak Ditemukan";
            break;
        }
    }else {
        echo "Selamat datang di Aplikasi Pengaduan Masyarakat Desa Goa Boma. Aplikasi ini dibuat untuk menampung pengaduan/aspirasi dari masyarakat Desa Goa Boma. <br>";
        echo "Anda login sebagai: ".$_SESSION['nama_petugas'];
    }

<?php

$nik        =$_POST['nik'];
$nama       =$_POST['nama'];
$username   =$_POST['username'];
$telp       =$_POST['telp'];
$password       =$_POST['password'];

include "koneksi.php";

$sql    = "INSERT INTO masyarakat (nik, nama, username, telp, password) VALUES ('$nik','$nama','$username','$telp','$password')";


try {
    $query = mysqli_query($koneksi, $sql);
    echo "<script> alert ('Anda berhasil mendaftar.'); window.location.assign('login.php');</script>";
} catch (mysqli_sql_exception $e) {
    echo "<script> alert ('Anda gagal mendaftar.'); window.location.assign('daftar.php');</script>";
}


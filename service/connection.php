<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'data-mahasiswa';

    $connectDB = mysqli_connect($host, $user, $pass, $db);

    if (!$connectDB) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>
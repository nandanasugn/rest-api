<?php
    $server = "localhost";
    $username = "root";
    $password = "123456";
    $database = "mahasiswa";

    $connection = mysqli_connect($server, $username, $password, $database);
    if(!$connection){
        die("koneksi gagal!!");
    }
?>
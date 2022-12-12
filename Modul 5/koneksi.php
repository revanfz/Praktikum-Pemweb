<?php
    $host   = "localhost";
    $user   = "root";
    $password = "";
    $dbName = "belajar_ajax";

    $connection = mysqli_connect($host, $user, $password, $dbName);

    if (!$connection) {
        die("Koneksi Gagal : ".mysqli_connect_error());
    }
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "praktekphp";
$koneksi = new mysqli(hostname: $servername, username: $username, password: $password, database:$database);

if($koneksi->connect_error){
    die("gagal terkoneksi" . $koneksi->connect_error);
}

// echo "berhasil terhubung ke database";

?>
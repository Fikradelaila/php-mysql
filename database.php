<?php

include "koneksi.php";

$database = 'praktekphp';
$create = "CREATE DATABASE $database";

if ($koneksi->query(query: $create) === true){
    echo "Database $database berhasil dibuat";
}else{
    echo "gagal membuat database";
}

$koneksi->close();
?>
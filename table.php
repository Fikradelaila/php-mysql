<?php
include "koneksi.php";
$create = "CREATE TABLE bimbel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama varchar(255) NOT NULL,
    umur INT(25) NOT NULL,
    jenis_kelamin varchar(25) NOT NULL,
    telp INT(25) NOT NULL,
    alamat varchar(255) NOT NULL    
)";

if($koneksi->query(query: $create) === true) {
    echo "tabel berhasil dibuat";
}else {
    echo "gagal membuat table";
}

// buat matiin koneksi dikoneksi.php
$koneksi->close();
?>
<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query(mysql: $koneksi, query: "DELETE FROM bimbel where id='$id'");

header(header: "location:index.php");
?>                                                                                                                                                         
<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telpon = $_POST['telp'];
$alamat = $_POST['alamat'];

$data = mysqli_query( $koneksi,"UPDATE bimbel SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin', telp='$nomor_telpon', alamat='$alamat' WHERE id = '$id' ");

header("location:index.php");


?>

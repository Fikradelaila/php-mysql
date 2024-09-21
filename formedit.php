<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM bimbel WHERE id='$id'");
while ($bimbel = mysqli_fetch_array($data)){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Bimbel</h1>

    <form action="edit.php" method="post">

    <input type="hidden" name="id" value="<?php print $bimbel['id'] ?>">


 <form action="create.php" method="post">

        <table>Nama Lengkap</table>
        <br>
        <input  value="<?php print $bimbel['nama'] ?>" type="text" name="nama">
        <br>

        <table>umur</table>
        <br>
        <input  value="<?php print $bimbel['umur'] ?>" type="umur" name="umur">
        <br>

        <table>jenis kelamin</table>
        <br>
        <input  value="<?php print $bimbel['jenis_kelamin'] ?>" type="text" name="jenis_kelamin">
        <br>

        <table>nomor telpon</table>
        <br>
        <input  value="<?php print $bimbel['telp'] ?>" type="number" name="telp">
        <br>

        <table>Alamat</table>
        <br>
        <textarea name="alamat"><?php print $bimbel['alamat'] ?></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>

    <?php
}
?>
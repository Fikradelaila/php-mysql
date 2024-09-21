<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; color: red;font-weight: 600;">praktek HTML dan PHP</h1><br><br>

    <table border="1" style="width: 80%; text-align: center">
        <tr style="header-table">
            <th>
                <!-- Tautan untuk Data Laki-Laki -->
                <a href="datalakilaki.php">Data Laki-Laki</a>
            </th>
            <th colspan=>
                <!-- Tautan untuk Data Perempuan -->
                <a href="dataperempuan.php">Data Perempuan</a>
            </th>
            <th>
                <!-- Tautan untuk Tambah Data dengan ID peserta -->
                <a href="form.php">Tambah Data</a>
            </th>
        </tr>
    </table>
    <table border="1" style="width: 80%; text-align: center">
        <tr style="background-color: aquamarine;color: black; font-weight: 700; font-family:Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">No.</th>
            <th>Nama Lengkap</th>
            <th>umur</th>
            <th>jenis kelamin</th>
            <th>nomor telpon</th>
            <th>alamat</th>
            <th>option</th>
        </tr>
        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM bimbel");
            while($bimbel = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php print $bimbel['id'] ?></td>
                <td><?php print $bimbel['nama'] ?></td>
                <td><?php print $bimbel['umur'] ?></td>
                <td><?php print $bimbel['jenis_kelamin'] ?></td>
                <td><?php print $bimbel['telp'] ?></td>
                <td><?php print $bimbel['alamat'] ?></td>
             
                <td>
                    <a href="formEdit.php?id=<?php print $bimbel['id'] ?>">Edit</a>
                    <a href="hapus.php?id=<?php print $bimbel['id'] ?>" onclick="return confirm('yakin mau hapus data?')">Hapus</a>
                    <a href="detail.php?id=<?php print $bimbel['id'] ?>">detail</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
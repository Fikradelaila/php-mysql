<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Bimbel</h1>
    <form action="./create.php" method="post">
        <label>Nama</label>
        <br>
        <input type="text" name="nama">
        <br><br>

        <label>umur</label>
        <br>
        <input type="number" name="umur">
        <br><br>

        <label>jenis kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br><br>

        <label>nomor telpon</label>
        <br>
        <input type="number" name="telp">
        <br><br>

        <label>Alamat</label>
        <br>
        <textarea name="alamat"></textarea>
        <br><br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
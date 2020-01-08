<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data </title>
</head>
<body>
    <form action="<?= base_url("app/tambah_data") ?>" method="POST"></form>
        <label for="id">ID</label>
            <input type="hidden" name="id" id="id"><br>
        <label for="nim">Nim</label>
            <input type="text" name="nim" id="nim"><br>
        <label for="nama">Nama</label>
            <input type="text" name="nama" id="nim"><br>
        <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat"><br>
        <button type="submit" name="submit">Tambah</button>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach($siswa as $rows) : ?>
    <form action="<?= base_url("app/ubah_data") ?>" method="POST">
            <label for="id">Id</label>
                <input type="hidden" name="id" id="id" value="<?= $rows["id"]; ?>"><br>
            <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" value="<?= $rows["nim"]; ?>"><br>
            <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $rows["nama"]; ?>"><br>
            <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?= $rows["alamat"]; ?>"><br>
            <button type="submit" name="submit" >Ubah</button>
    </form>
    <?php endforeach; ?>
</body>
</html>
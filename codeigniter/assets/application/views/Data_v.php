<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data mahasiswa</title>
</head>
<body>
    <form action="" methos="POST">
        <a href="<?= base_url("app/tambah") ?>">Tambah data</a>
    </form>
    <table border ="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php foreach($siswa as $row) : ?>
        <tbody>
            <tr>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td>
                    <a href="<?= base_url("app/ubah/").$row["id"] ?>">Ubah |</a>
                    <a href="<?= base_url("app/hapus").$row["id"] ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</body>
</html>
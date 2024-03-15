<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>

<body>
    <a href="tambah.php">Tambah Data Pegawai</a>
    <?php
    require 'class/pegawai.php';
    $pegawai = new Pegawai();
    $data = $pegawai->TampilPegawai();
    ?>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $value) { ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['jabatan'] ?></td>
                    <td><?= $value['gaji'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $value['id'] ?>">Edit</a>
                        <a href="aksi.php?id=<?= $value['id'] ?>">Hapus</a>

                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>
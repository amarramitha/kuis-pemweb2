<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
</head>
<?php
require 'class/pegawai.php';
$pegawai = new Pegawai();
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $ambil = $pegawai->AmbilPegawai($id);
    $value = $ambil->fetch(PDO::FETCH_OBJ);
} else {
    // Redirect atau tindakan lain jika id tidak tersedia
    echo "ID tidak tersedia.";
    exit;
}
?>

<body>
    <form action='aksi.php' method="post">
        ID <br>
        <input type='text' readonly name="id" value="<?= $value->id ?>" required>
        <br>Nama <br>
        <input type='text' name="nama" value="<?= $value->nama ?>" required>
        <br>Jabatan <br>
        <input type='text' name='jabatan' value="<?= $value->jabatan ?>" required> 
        <br>Gaji <br>
        <input type='text' name='gaji' value="<?= $value->gaji ?>" required>
        <br>
        <input type="submit" name="edit_pegawai" value="edit">
    </form>
</body>

</html>
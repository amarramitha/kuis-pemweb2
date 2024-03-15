<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>

<body>
    <form action='aksi.php' method="post">
        ID <br>
        <input type='text' name='id' required>
        <br>Nama <br>
        <input type='text' name='nama' required>
        <br>Jabatan <br>
        <input type='text' name='jabatan' required> 
        <br>Gaji <br>
        <input type='text' name='gaji' required>
        <br>
        <input type="submit" name="tambah_pegawai" value="tambah">
    </form>
</body>

</html>
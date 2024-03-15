<?php

require 'class/pegawai.php';
$pegawai = new Pegawai();

//jika menekan tombol tambah pegawai
if (isset($_POST['tambah_pegawai'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];
    $tambah = $pegawai->TambahPegawai($id, $nama, $jabatan, $gaji);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}

//jika menekan tombol hapus
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $pegawai->HapusPegawai($id);
    if ($hapus == 'berhasil') {
        header('location:index.php');
    }
}

//jika menekean tombol edit
if (isset($_POST['edit_pegawai'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];
    $tambah = $pegawai->EditPegawai($id, $nama, $jabatan, $gaji);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}

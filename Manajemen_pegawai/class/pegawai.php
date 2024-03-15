<?php
class Pegawai
{
    public function __construct()
    {
        require 'koneksi.php';
    }

    public function TampilPegawai()
    {
        $query = $this->db->query("select * from pegawai");
        $query->execute();
        return $query;
    }

    public function TambahPegawai($id, $nama, $jabatan, $gaji)
    {
        $query = $this->db->prepare("insert into pegawai (id,nama,jabatan,gaji)values(:id,:nama,:jabatan,:gaji)");
        $query->bindParam('id', $id);
        $query->bindParam('nama', $nama);
        $query->bindParam('jabatan', $jabatan);
        $query->bindParam('gaji', $gaji);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function EditPegawai($id, $nama, $jabatan, $gaji)
    {
        $query = $this->db->prepare("update pegawai set nama=:nama,jabatan=:jabatan,gaji=:gaji where id=:id");
        $query->bindParam('id', $id);
        $query->bindParam('nama', $nama);
        $query->bindParam('jabatan', $jabatan);
        $query->bindParam('gaji', $gaji);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }


    public function AmbilPegawai($id)
    {
        $query = $this->db->prepare("select * from pegawai where id = :id");
        $query->bindParam('id', $id);
        $query->execute();
        if ($query) {
            return $query;
        } else {
            return 'gagal';
        }
    }

    public function HapusPegawai($id)
    {
        $query = $this->db->prepare("delete from pegawai where id =:id");
        $query->bindParam('id', $id);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}

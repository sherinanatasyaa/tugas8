<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

//tabel spv
public function insert_spv($id_spv, $nama_spv)
{
    $sql = "INSERT INTO tb_spv (id_spv, nama_spv) VALUES ('$id_spv', '$nama_spv')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_spv()
    {
        $sql = "SELECT * FROM tb_spv"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
public function edit_spv($id_spv)
    {
        $sql = "SELECT * FROM tb_spv WHERE id_spv='$id_spv'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris =$obj;
        }
            return $baris;
    }
public function update_spv($id_spv, $nama_spv)
    {
        $sql = "UPDATE tb_spv SET nama_spv='$nama_spv' WHERE id_spv='$id_spv'";
        $this->conn->query($sql);
    }
public function delete_spv($id_spv)
    {
        $sql = "DELETE FROM tb_spv WHERE id_spv='$id_spv'";
        $this->conn->query($sql);
    }


//tabel gaji
public function insert_gaji($id_gaji, $id_spv, $gaji_pokok)
{
    $sql = "INSERT INTO tb_gaji (id_gaji, id_spv, gaji_pokok) VALUES ('$id_gaji', '$id_spv', '$gaji_pokok')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_gaji()
    {
        $sql = "SELECT * FROM tb_gaji"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
public function edit_gaji($id_gaji)
    {
        $sql = "SELECT * FROM tb_gaji WHERE id_gaji='$id_gaji'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris =$obj;
        }
            return $baris;
    }
public function update_gaji($id_gaji, $id_spv, $gaji_pokok)
    {
        $sql = "UPDATE tb_gaji SET id_spv='$id_spv', gaji_pokok='$gaji_pokok' WHERE id_gaji='$id_gaji'";
        $this->conn->query($sql);
    }
public function delete_gaji($id_gaji)
    {
        $sql = "DELETE FROM tb_gaji WHERE id_gaji='$id_gaji'";
        $this->conn->query($sql);
    }


//tabel pesanan
public function insert_rekap($id_gaji, $id_spv, $gaji_pokok)
{
    $sql = "INSERT INTO tb_gaji (id_gaji, id_spv, gaji_pokok) VALUES ('$id_gaji', '$id_spv', '$gaji_pokok')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_rekap()
    {
        $sql = "SELECT tb_spv.id_spv, tb_spv.nama_spv, tb_gaji.gaji_pokok FROM tb_spv JOIN tb_gaji ON tb_gaji.id_spv = tb_spv.id_spv";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
}
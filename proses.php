<?php
include 'model.php';

//tabel spv
if (isset($_POST['submit_simpan_spv'])) {
    $id_spv = $_POST['id_spv'];
    $nama_spv = $_POST['nama_spv'];
    $model = new Model();
    $model->insert_spv($id_spv, $nama_spv);
    header('location:spv.php');
}
if (isset($_POST['submit_edit_spv'])) {
    $id_spv = $_POST['id_spv'];
    $nama_spv = $_POST['nama_spv'];
    $model = new Model();
    $model->update_spv($id_spv, $nama_spv);
    header('location:spv.php');
}
if (isset($_GET['id_spv'])) {
    $id_spv = $_GET['id_spv'];
    $model = new Model();
    $model->delete_spv($id_spv);
    header('location:spv.php');
}

//tabel gaji
if (isset($_POST['submit_simpan_gaji'])) {
    $id_gaji = $_POST['id_gaji'];
    $id_spv = $_POST['id_spv'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $model = new Model();
    $model->insert_gaji($id_gaji, $id_spv, $gaji_pokok);
    header('location:gaji.php');
}
if (isset($_POST['submit_edit_gaji'])) {
    $id_gaji = $_POST['id_gaji'];
    $id_spv = $_POST['id_spv'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $model = new Model();
    $model->update_gaji($id_gaji, $id_spv, $gaji_pokok);
    header('location:gaji.php');
}
if (isset($_GET['id_gaji'])) {
    $id_gaji = $_GET['id_gaji'];
    $model = new Model();
    $model->delete_gaji($id_gaji);
    header('location:gaji.php');
}

//tabel rekap
if (isset($_POST['submit_simpan_rekap'])) {
    $id_spv = $_POST['id_spv'];
    $nama_spv = $_POST['nama_spv'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $model = new Model();
    $model->insert_rekap($id_spv, $nama_spv, $gaji_pokok);
    header('location:rekap.php');
}
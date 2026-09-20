<?php
require_once 'model.php';
session_start();

if (!isset($_SESSION['mahasiswa_list'])) {
    $_SESSION['mahasiswa_list'] = [];
}
if (!isset($_SESSION['matakuliah_list'])) {
    $_SESSION['matakuliah_list'] = [];
}
if (!isset($_SESSION['relasi_list'])) {
    $_SESSION['relasi_list'] = [];
}

if (isset($_POST['btn_tambah_mahasiswa'])) {
    $mhs = new Mahasiswa();
    $mhs->nama    = $_POST['nama'];
    $mhs->nim     = $_POST['nim'];
    $mhs->jurusan = $_POST['jurusan'];
    $_SESSION['mahasiswa_list'][] = $mhs;
    header('Location: view.php?page=mahasiswa');
    exit;
}

if (isset($_POST['btn_update_mahasiswa'])) {
    $index = $_POST['mahasiswa_id'];
    $mhs = $_SESSION['mahasiswa_list'][$index];
    $mhs->nama    = $_POST['nama'];
    $mhs->nim     = $_POST['nim'];
    $mhs->jurusan = $_POST['jurusan'];
    $_SESSION['mahasiswa_list'][$index] = $mhs;
    header('Location: view.php?page=mahasiswa');
    exit;
}

if (isset($_GET['delete_mahasiswa_id'])) {
    $index = $_GET['delete_mahasiswa_id'];
    unset($_SESSION['mahasiswa_list'][$index]);
    $_SESSION['mahasiswa_list'] = array_values($_SESSION['mahasiswa_list']);
    header('Location: view.php?page=mahasiswa');
    exit;
}

if (isset($_POST['btn_tambah_matakuliah'])) {
    $mk = new MataKuliah();
    $mk->nama_mk = $_POST['nama_mk'];
    $mk->kode    = $_POST['kode'];
    $mk->sks     = $_POST['sks'];
    $_SESSION['matakuliah_list'][] = $mk;
    header('Location: view.php?page=matakuliah');
    exit;
}

if (isset($_POST['btn_update_matakuliah'])) {
    $index = $_POST['matakuliah_id'];
    $mk = $_SESSION['matakuliah_list'][$index];
    $mk->nama_mk = $_POST['nama_mk'];
    $mk->kode    = $_POST['kode'];
    $mk->sks     = $_POST['sks'];
    $_SESSION['matakuliah_list'][$index] = $mk;
    header('Location: view.php?page=matakuliah');
    exit;
}

if (isset($_GET['delete_matakuliah_id'])) {
    $index = $_GET['delete_matakuliah_id'];
    unset($_SESSION['matakuliah_list'][$index]);
    $_SESSION['matakuliah_list'] = array_values($_SESSION['matakuliah_list']);
    header('Location: view.php?page=matakuliah');
    exit;
}

if (isset($_POST['btn_tambah_relasi'])) {
    $relasi = [
        'mahasiswa_index'  => $_POST['mahasiswa_index'],
        'matakuliah_index' => $_POST['matakuliah_index'],
    ];
    $_SESSION['relasi_list'][] = $relasi;
    header('Location: view.php?page=relasi');
    exit;
}

if (isset($_GET['delete_relasi_id'])) {
    $index = $_GET['delete_relasi_id'];
    unset($_SESSION['relasi_list'][$index]);
    $_SESSION['relasi_list'] = array_values($_SESSION['relasi_list']);
    header('Location: view.php?page=relasi');
    exit;
}

header('Location: view.php');
exit;
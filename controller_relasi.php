<?php
include("model.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// buat session relasilist jika belum ada
if (!isset($_SESSION['relasilist'])) {
    $_SESSION['relasilist'] = array();
}

function createRelasi(){
    $relasi = array(
        "mahasiswaIndex"  => $_POST['inputMahasiswa'],
        "matakuliahIndex" => $_POST['inputMatakuliah'],
    );
    array_push($_SESSION['relasilist'], $relasi);
}

function getAllRelasis(){
    return $_SESSION['relasilist'];
}

function deleteRelasi($index){
    unset($_SESSION['relasilist'][$index]); // array index
}

// jika button_tambah di klik
if (isset($_POST['button_tambah_relasi'])) {
    createRelasi();
    header("Location:view_relasi.php"); // kembali ke halaman lain
}

// jika button delete di klik
if (isset($_GET['deleteRelasiID'])) {
    deleteRelasi($_GET['deleteRelasiID']);
    header("Location:view_relasi.php"); // kembali ke halaman lain
}

?>
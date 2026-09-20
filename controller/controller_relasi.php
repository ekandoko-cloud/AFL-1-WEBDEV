<?php
include_once("../model/model.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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

function getAllRelasi(){
    return $_SESSION['relasilist'];
}

function deleteRelasi($index){
    unset($_SESSION['relasilist'][$index]);
}

function updateRelasi($index){
    $relasi = array(
        "mahasiswaIndex"  => $_POST['inputMahasiswa'],
        "matakuliahIndex" => $_POST['inputMatakuliah'],
    );
    $_SESSION['relasilist'][$index] = $relasi;
}

if (isset($_POST['button_tambah_relasi'])) {
    createRelasi();
    header("Location:view_relasi.php");
}

if (isset($_POST['button_update_relasi'])) {
    updateRelasi($_POST['editID']);
    header("Location:view_relasi.php");
}

if (isset($_GET['deleteRelasiID'])) {
    deleteRelasi($_GET['deleteRelasiID']);
    header("Location:view_relasi.php");
}

?>
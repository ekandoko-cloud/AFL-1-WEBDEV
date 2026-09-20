<?php
include_once("../model/model.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("controller_relasi.php");

if (!isset($_SESSION['matakuliahlist'])) {
    $_SESSION['matakuliahlist'] = array();
}

function createMataKuliah(){
    $mk = new model_matakuliah();
    $mk->nama_mk = $_POST['inputNamaMK'];
    $mk->kode    = $_POST['inputKode'];
    $mk->sks     = $_POST['inputSks'];
    array_push($_SESSION['matakuliahlist'], $mk);
}

function getAllMataKuliah(){
    return $_SESSION['matakuliahlist'];
}

function updateMataKuliah($index){
    $mk = $_SESSION['matakuliahlist'][$index];
    $mk->nama_mk = $_POST['inputNamaMK'];
    $mk->kode    = $_POST['inputKode'];
    $mk->sks     = $_POST['inputSks'];
    $_SESSION['matakuliahlist'][$index] = $mk;
}

function deleteMataKuliah($index){
    unset($_SESSION['matakuliahlist'][$index]);
    deleteRelasiByMataKuliah($index);
}

if (isset($_POST['button_tambah_matakuliah'])) {
    createMataKuliah();
    header("Location:../view/view_matakuliah.php");
}

if (isset($_POST['button_update_matakuliah'])) {
    updateMataKuliah($_POST['editID']);
    header("Location:../view/view_matakuliah.php");
}

if (isset($_GET['deleteID'])) {
    deleteMataKuliah($_GET['deleteID']);
    header("Location:../view/view_matakuliah.php");
}

?>
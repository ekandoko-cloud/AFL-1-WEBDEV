<?php
include_once("../model/model.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['matakuliahlist'])) {
    $_SESSION['matakuliahlist'] = array();
}

function createMataKuliah(){
    $mk = new model_matakuliah($_POST['inputNamaMK'], $_POST['inputKode'], $_POST['inputSks']);
    array_push($_SESSION['matakuliahlist'], $mk);
}

function getAllMataKuliah(){
    return $_SESSION['matakuliahlist'];
}

function updateMataKuliah($index){
    $mk = $_SESSION['matakuliahlist'][$index];
    $mk->setNamaMk($_POST['inputNamaMK']);
    $mk->setKode($_POST['inputKode']);
    $mk->setSks($_POST['inputSks']);
    $_SESSION['matakuliahlist'][$index] = $mk;
}

function deleteMataKuliah($index){
    unset($_SESSION['matakuliahlist'][$index]);
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
<?php
include_once("../model/model.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['mahasiswalist'])) {
    $_SESSION['mahasiswalist'] = array();
}

function createMahasiswa(){
    $mhs = new model_mahasiswa($_POST['inputNama'], $_POST['inputNim'], $_POST['inputJurusan']);
    array_push($_SESSION['mahasiswalist'], $mhs);
}

function getAllMahasiswa(){
    return $_SESSION['mahasiswalist'];
}

function updateMahasiswa($index){
    $mhs = $_SESSION['mahasiswalist'][$index];
    $mhs->setNama($_POST['inputNama']);
    $mhs->setNim($_POST['inputNim']);
    $mhs->setJurusan($_POST['inputJurusan']);
    $_SESSION['mahasiswalist'][$index] = $mhs;
}

function deleteMahasiswa($index){
    unset($_SESSION['mahasiswalist'][$index]);
}

if (isset($_POST['button_tambah_mahasiswa'])) {
    createMahasiswa();
    header("Location:../view/view_mahasiswa.php");
}

if (isset($_POST['button_update_mahasiswa'])) {
    updateMahasiswa($_POST['editID']);
    header("Location:../view/view_mahasiswa.php");
}

if (isset($_GET['deleteID'])) {
    deleteMahasiswa($_GET['deleteID']);
    header("Location:../view/view_mahasiswa.php");
}

?>
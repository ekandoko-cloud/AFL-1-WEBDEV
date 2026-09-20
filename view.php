<?php
ini_set('display_errors', 1); error_reporting(E_ALL);
require_once 'model.php';
session_start();

if (!isset($_SESSION['mahasiswa_list']))  $_SESSION['mahasiswa_list']  = [];
if (!isset($_SESSION['matakuliah_list'])) $_SESSION['matakuliah_list'] = [];
if (!isset($_SESSION['relasi_list']))     $_SESSION['relasi_list']     = [];

$page = isset($_GET['page']) ? $_GET['page'] : 'mahasiswa';

// Whitelist halaman yang boleh diakses (biar aman dari path traversal)
$halaman_valid = ['mahasiswa', 'matakuliah', 'relasi', 'edit_mahasiswa', 'edit_matakuliah'];
if (!in_array($page, $halaman_valid)) {
    $page = 'mahasiswa';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa &amp; Mata Kuliah - MVC PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="style.php" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    <h1 class="mb-1">Mahasiswa &amp; Mata Kuliah</h1>
    <p class="text-muted">Latihan MVC menggunakan PHP</p>

    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link <?php echo (in_array($page, ['mahasiswa', 'edit_mahasiswa'])) ? 'active' : ''; ?>"
               href="view.php?page=mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (in_array($page, ['matakuliah', 'edit_matakuliah'])) ? 'active' : ''; ?>"
               href="view.php?page=matakuliah">Mata Kuliah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'relasi') ? 'active' : ''; ?>"
               href="view.php?page=relasi">Mahasiswa - Mata Kuliah</a>
        </li>
    </ul>

    <div class="card">
        <div class="card-body">
            <?php include $page . '.php'; ?>
        </div>
    </div>
</div>
</body>
</html>
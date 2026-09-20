<?php
include_once("../controller/controller_mahasiswa.php");
include_once("../controller/controller_matakuliah.php");
include_once("../controller/controller_relasi.php");

$editID = $_GET['editID'];
$allmahasiswas = getAllMahasiswas();
$allmatakuliah = getAllMataKuliah();
$allrelasi = getAllRelasi();
$relasi = $allrelasi[$editID];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Relasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container p-3">
    <h1>Mahasiswa & Mata Kuliah</h1>
    <div class="card">
        <div class="card-body">
            <h3>Edit Relasi (Mahasiswa Ambil Mata Kuliah)</h3>
            <form action="../controller/controller_relasi.php" method="POST">
                <input type="hidden" name="editID" value="<?=$editID?>">
                <div class="mb-3">
                    <label class="form-label">Mahasiswa</label>
                    <select name="inputMahasiswa" class="form-select" required>
                        <?php foreach ($allmahasiswas as $index => $mhs) { ?>
                            <option value="<?=$index?>" <?= ($index == $relasi['mahasiswaIndex']) ? "selected" : "" ?>>
                                <?=htmlspecialchars($mhs->nama . " (" . $mhs->nim . ")")?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <select name="inputMatakuliah" class="form-select" required>
                        <?php foreach ($allmatakuliah as $index => $mk) { ?>
                            <option value="<?=$index?>" <?= ($index == $relasi['matakuliahIndex']) ? "selected" : "" ?>>
                                <?=htmlspecialchars($mk->nama_mk . " (" . $mk->kode . ")")?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="button_update_relasi" class="btn btn-primary">Update</button>
                <a href="view_relasi.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
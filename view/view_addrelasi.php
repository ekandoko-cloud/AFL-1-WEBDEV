<?php
include_once("../controller/controller_mahasiswa.php");
include_once("../controller/controller_matakuliah.php");
include_once("../controller/controller_relasi.php");
$allmahasiswas = getAllMahasiswas();
$allmatakuliah = getAllMataKuliah();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Add Relasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container p-3">
    <h1>Mahasiswa & Mata Kuliah</h1>
    <div class="card">
        <div class="card-body">
            <h3>Add Relasi Mahasiswa - Mata Kuliah</h3>
            <?php if (count($allmahasiswas) == 0 || count($allmatakuliah) == 0): ?>
                <div class="alert alert-warning">
                    Tambahkan data <strong>Mahasiswa</strong> dan <strong>Mata Kuliah</strong> terlebih dahulu sebelum membuat relasi.
                </div>
            <?php else: ?>
                <form action="../controller/controller_relasi.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Mahasiswa</label>
                        <select name="inputMahasiswa" class="form-select" required>
                            <?php foreach ($allmahasiswas as $index => $mhs) { ?>
                                <option value="<?=$index?>"><?=htmlspecialchars($mhs->nama . " (" . $mhs->nim . ")")?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mata Kuliah</label>
                        <select name="inputMatakuliah" class="form-select" required>
                            <?php foreach ($allmatakuliah as $index => $mk) { ?>
                                <option value="<?=$index?>"><?=htmlspecialchars($mk->nama_mk . " (" . $mk->kode . ")")?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" name="button_tambah_relasi" class="btn btn-primary">Simpan</button>
                    <a href="view_relasi.php" class="btn btn-secondary">Batal</a>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
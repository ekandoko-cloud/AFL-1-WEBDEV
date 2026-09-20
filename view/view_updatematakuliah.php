<?php
include("../controller/controller_matakuliah.php");
$editID = $_GET['editID'];
$allmatakuliah = getAllMataKuliahs();
$mk = $allmatakuliah[$editID];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-3">
        <h1>Mahasiswa &amp; Mata Kuliah</h1>
        <div class="card">
            <div class="card-body">
                <h3>Edit Mata Kuliah</h3>
                <form action="../controller/controller_matakuliah.php" method="POST">
                    <input type="hidden" name="editID" value="<?=$editID?>">
                    <div class="mb-3">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input type="text" name="inputNamaMK" class="form-control" value="<?=htmlspecialchars($mk->nama_mk)?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kode</label>
                        <input type="text" name="inputKode" class="form-control" value="<?=htmlspecialchars($mk->kode)?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SKS</label>
                        <input type="number" name="inputSks" class="form-control" value="<?=htmlspecialchars($mk->sks)?>" min="1" max="6" required>
                    </div>
                    <button type="submit" name="button_update_matakuliah" class="btn btn-primary">Update</button>
                    <a href="view_matakuliah.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

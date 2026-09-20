<?php include("controller_matakuliah.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-3">
        <h1>Mahasiswa &amp; Mata Kuliah</h1>
        <div class="card">
            <div class="card-body">
                <h3>Tambah Mata Kuliah</h3>
                <form action="controller_matakuliah.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input type="text" name="inputNamaMK" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kode</label>
                        <input type="text" name="inputKode" class="form-control" placeholder="Masukkan Kode MK" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SKS</label>
                        <input type="number" name="inputSks" class="form-control" placeholder="Masukkan SKS" min="1" max="6" required>
                    </div>
                    <button type="submit" name="button_tambah_matakuliah" class="btn btn-primary">Simpan</button>
                    <a href="view_matakuliah.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

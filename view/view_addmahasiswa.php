<?php include("controller_mahasiswa.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-3">
        <h1>Mahasiswa &amp; Mata Kuliah</h1>

        <div class="card">
            <div class="card-body">
                <h3>Tambah Mahasiswa</h3>
                <form action="../controller/controller_mahasiswa.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="inputNama" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="inputNim" class="form-control" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" name="inputJurusan" class="form-control" placeholder="Masukkan Jurusan" required>
                    </div>
                    <button type="submit" name="button_tambah_mahasiswa" class="btn btn-primary">Simpan</button>
                    <a href="view_mahasiswa.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

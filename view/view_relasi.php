<?php
include_once("../controller/controller_mahasiswa.php");
include_once("../controller/controller_matakuliah.php");
include_once("../controller/controller_relasi.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Relasi Mahasiswa & Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container p-3">
    <h1>Mahasiswa & Mata Kuliah</h1>
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link" href="view_mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view_matakuliah.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view_relasi.php">Mahasiswa - Mata Kuliah</a>
        </li>
    </ul>

    <div class="card text-center">
        <div class="card-body">
            <h3>Relasi Mahasiswa & Mata Kuliah</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mahasiswa</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 0;
                $allmahasiswa = getAllMahasiswa();
                $allmatakuliah = getAllMataKuliah();
                $allrelasi = getAllRelasi();
                foreach ($allrelasi as $index => $relasi) {
                    $counter++;
                    $mhsIndex = $relasi['mahasiswaIndex'];
                    $mkIndex = $relasi['matakuliahIndex'];

                    $namaMhs = isset($allmahasiswa[$mhsIndex]) ? $allmahasiswa[$mhsIndex]->getNama() : "(data sudah dihapus)";
                    $namaMk = isset($allmatakuliah[$mkIndex]) ? $allmatakuliah[$mkIndex]->getNamaMk() : "(data sudah dihapus)";
                    ?>
                    <tr>
                        <th scope="row"><?= $counter ?></th>
                        <td><?= htmlspecialchars($namaMhs) ?></td>
                        <td><?= htmlspecialchars($namaMk) ?></td>
                        <td>
                            <a href="view_updaterelasi.php?editID=<?= $index ?>">
                                <button class="btn btn-warning">Update</button>
                            </a>
                            <a href="../controller/controller_relasi.php?deleteRelasiID=<?= $index ?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <a href="view_addrelasi.php" class="btn btn-primary">Tambah Relasi</a>
        </div>
    </div>
</div>
</body>
</html>
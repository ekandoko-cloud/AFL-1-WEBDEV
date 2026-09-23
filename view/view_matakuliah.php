<?php include_once("../controller/controller_matakuliah.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
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
            <h3>Daftar Mata Kuliah</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">Kode</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 0;
                $allmatakuliah = getAllMataKuliah();
                foreach ($allmatakuliah as $index => $mk) {
                    $counter++;
                    ?>
                    <tr>
                        <th scope="row"><?= $counter ?></th>
                        <td><?= htmlspecialchars($mk->getNamaMk()) ?></td>
                        <td><?= htmlspecialchars($mk->getKode()) ?></td>
                        <td><?= htmlspecialchars($mk->getSks()) ?></td>
                        <td>
                            <a href="view_updatematakuliah.php?editID=<?= $index ?>">
                                <button class="btn btn-warning">Update</button>
                            </a>
                            <a href="../controller/controller_matakuliah.php?deleteID=<?= $index ?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <a href="view_addmatakuliah.php" class="btn btn-primary">Tambah Mata Kuliah</a>
        </div>
    </div>
</div>
</body>
</html>
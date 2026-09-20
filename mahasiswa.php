<h3>Daftar Mahasiswa</h3>
<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if (count($_SESSION['mahasiswa_list']) == 0): ?>
        <tr><td colspan="5" class="text-center text-muted">Belum ada data mahasiswa</td></tr>
    <?php endif; ?>
    <?php foreach ($_SESSION['mahasiswa_list'] as $index => $mhs): ?>
        <tr>
            <td><?php echo $index; ?></td>
            <td><?php echo htmlspecialchars($mhs->nama); ?></td>
            <td><?php echo htmlspecialchars($mhs->nim); ?></td>
            <td><?php echo htmlspecialchars($mhs->jurusan); ?></td>
            <td>
                <a href="view.php?page=edit_mahasiswa&id=<?php echo $index; ?>"
                   class="btn btn-warning btn-sm">Edit</a>
                <a href="controller.php?delete_mahasiswa_id=<?php echo $index; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus mahasiswa ini?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h4 class="mt-4">Tambah Mahasiswa</h4>
<form action="controller.php" method="POST" class="w-75">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
    </div>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
    </div>
    <button type="submit" name="btn_tambah_mahasiswa" class="btn btn-primary">Simpan</button>
</form>
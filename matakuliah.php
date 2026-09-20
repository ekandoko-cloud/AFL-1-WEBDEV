<h3>Daftar Mata Kuliah</h3>
<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Nama Mata Kuliah</th>
            <th>Kode</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if (count($_SESSION['matakuliah_list']) == 0): ?>
        <tr><td colspan="5" class="text-center text-muted">Belum ada data mata kuliah</td></tr>
    <?php endif; ?>
    <?php foreach ($_SESSION['matakuliah_list'] as $index => $mk): ?>
        <tr>
            <td><?php echo $index; ?></td>
            <td><?php echo htmlspecialchars($mk->nama_mk); ?></td>
            <td><?php echo htmlspecialchars($mk->kode); ?></td>
            <td><?php echo htmlspecialchars($mk->sks); ?></td>
            <td>
                <a href="view.php?page=edit_matakuliah&id=<?php echo $index; ?>"
                   class="btn btn-warning btn-sm">Edit</a>
                <a href="controller.php?delete_matakuliah_id=<?php echo $index; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus mata kuliah ini?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h4 class="mt-4">Tambah Mata Kuliah</h4>
<form action="controller.php" method="POST" class="w-75">
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Kode</label>
        <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode MK" required>
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS" min="1" max="6" required>
    </div>
    <button type="submit" name="btn_tambah_matakuliah" class="btn btn-primary">Simpan</button>
</form>
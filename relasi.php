<h3>Mahasiswa Ambil Mata Kuliah</h3>
<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if (count($_SESSION['relasi_list']) == 0): ?>
        <tr><td colspan="4" class="text-center text-muted">Belum ada data pengambilan mata kuliah</td></tr>
    <?php endif; ?>
    <?php foreach ($_SESSION['relasi_list'] as $index => $relasi): ?>
        <?php
            $mhs_index = $relasi['mahasiswa_index'];
            $mk_index  = $relasi['matakuliah_index'];

            $nama_mhs = isset($_SESSION['mahasiswa_list'][$mhs_index])
                ? $_SESSION['mahasiswa_list'][$mhs_index]->nama
                : '(data sudah dihapus)';

            $nama_mk = isset($_SESSION['matakuliah_list'][$mk_index])
                ? $_SESSION['matakuliah_list'][$mk_index]->nama_mk
                : '(data sudah dihapus)';
        ?>
        <tr>
            <td><?php echo $index; ?></td>
            <td><?php echo htmlspecialchars($nama_mhs); ?></td>
            <td><?php echo htmlspecialchars($nama_mk); ?></td>
            <td>
                <a href="controller.php?delete_relasi_id=<?php echo $index; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus relasi ini?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h4 class="mt-4">Tambah Relasi (Mahasiswa Ambil Mata Kuliah)</h4>

<?php if (count($_SESSION['mahasiswa_list']) == 0 || count($_SESSION['matakuliah_list']) == 0): ?>
    <div class="alert alert-warning">
        Tambahkan data <strong>Mahasiswa</strong> dan <strong>Mata Kuliah</strong>
        terlebih dahulu sebelum membuat relasi.
    </div>
<?php else: ?>
    <form action="controller.php" method="POST" class="w-75">
        <div class="mb-3">
            <label class="form-label">Mahasiswa</label>
            <select name="mahasiswa_index" class="form-select" required>
                <?php foreach ($_SESSION['mahasiswa_list'] as $index => $mhs): ?>
                    <option value="<?php echo $index; ?>">
                        <?php echo htmlspecialchars($mhs->nama . ' (' . $mhs->nim . ')'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Mata Kuliah</label>
            <select name="matakuliah_index" class="form-select" required>
                <?php foreach ($_SESSION['matakuliah_list'] as $index => $mk): ?>
                    <option value="<?php echo $index; ?>">
                        <?php echo htmlspecialchars($mk->nama_mk . ' (' . $mk->kode . ')'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="btn_tambah_relasi" class="btn btn-primary">Simpan</button>
    </form>
<?php endif; ?>
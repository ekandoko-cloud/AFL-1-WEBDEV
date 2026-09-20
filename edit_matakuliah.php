<?php
    $edit_id = $_GET['id'];
    $mk = $_SESSION['matakuliah_list'][$edit_id];
?>
<h3>Edit Mata Kuliah</h3>
<form action="controller.php" method="POST" class="w-75">
    <input type="hidden" name="matakuliah_id" value="<?php echo $edit_id; ?>">
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" class="form-control"
               value="<?php echo htmlspecialchars($mk->nama_mk); ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Kode</label>
        <input type="text" name="kode" class="form-control"
               value="<?php echo htmlspecialchars($mk->kode); ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control"
               value="<?php echo htmlspecialchars($mk->sks); ?>" min="1" max="6" required>
    </div>
    <button type="submit" name="btn_update_matakuliah" class="btn btn-primary">Update</button>
    <a href="view.php?page=matakuliah" class="btn btn-secondary">Batal</a>
</form>
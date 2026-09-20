<?php
    $edit_id = $_GET['id'];
    $mhs = $_SESSION['mahasiswa_list'][$edit_id];
?>
<h3>Edit Mahasiswa</h3>
<form action="controller.php" method="POST" class="w-75">
    <input type="hidden" name="mahasiswa_id" value="<?php echo $edit_id; ?>">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control"
               value="<?php echo htmlspecialchars($mhs->nama); ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control"
               value="<?php echo htmlspecialchars($mhs->nim); ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <input type="text" name="jurusan" class="form-control"
               value="<?php echo htmlspecialchars($mhs->jurusan); ?>" required>
    </div>
    <button type="submit" name="btn_update_mahasiswa" class="btn btn-primary">Update</button>
    <a href="view.php?page=mahasiswa" class="btn btn-secondary">Batal</a>
</form>
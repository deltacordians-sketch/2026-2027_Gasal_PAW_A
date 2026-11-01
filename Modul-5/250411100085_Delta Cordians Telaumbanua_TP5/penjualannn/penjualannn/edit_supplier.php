<?php
require_once "koneksi.php";
$id = $_GET['id'] ?? '';
$stmt = mysqli_prepare($koneksi, "SELECT * FROM supplier WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);
if (!$data) { die("Data supplier tidak ditemukan. <a href='supplier.php'>Kembali</a>"); }
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $telp = trim($_POST['telp'] ?? '');
    $alamat = trim($_POST['alamat'] ?? '');
    if ($nama === '') {
        $error = "Nama supplier wajib diisi.";
    } else {
        $update = mysqli_prepare($koneksi, "UPDATE supplier SET nama = ?, telp = ?, alamat = ? WHERE id = ?");
        mysqli_stmt_bind_param($update, "sssi", $nama, $telp, $alamat, $id);
        if (mysqli_stmt_execute($update)) { header("Location: supplier.php?pesan=berhasil"); exit; }
        $error = "Gagal mengubah data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Edit Supplier</title><link rel="stylesheet" href="css/style.css"></head><body>
<div class="container"><h2>Edit Data Supplier</h2>
<?php if ($error): ?><div class="alert"><?= htmlspecialchars($error); ?></div><?php endif; ?>
<form method="POST">
<div class="form-group"><label for="nama">Nama</label><input id="nama" name="nama" required value="<?= htmlspecialchars($_POST['nama'] ?? $data['nama']); ?>"></div>
<div class="form-group"><label for="telp">Telp</label><input id="telp" name="telp" value="<?= htmlspecialchars($_POST['telp'] ?? $data['telp']); ?>"></div>
<div class="form-group"><label for="alamat">Alamat</label><textarea id="alamat" name="alamat"><?= htmlspecialchars($_POST['alamat'] ?? $data['alamat']); ?></textarea></div>
<button class="btn btn-update" type="submit">Update</button> <a class="btn btn-batal" href="supplier.php">Batal</a>
</form></div></body></html>

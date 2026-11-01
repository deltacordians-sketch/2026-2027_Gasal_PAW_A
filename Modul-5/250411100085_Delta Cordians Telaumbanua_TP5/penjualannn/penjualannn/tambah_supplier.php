<?php
require_once "koneksi.php";
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $telp = trim($_POST['telp'] ?? '');
    $alamat = trim($_POST['alamat'] ?? '');
    if ($nama === '') {
        $error = "Nama supplier wajib diisi.";
    } else {
        $stmt = mysqli_prepare($koneksi, "INSERT INTO supplier (nama, telp, alamat) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $nama, $telp, $alamat);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: supplier.php?pesan=berhasil"); exit;
        }
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tambah Supplier</title><link rel="stylesheet" href="css/style.css"></head><body>
<div class="container"><h2>Tambah Data Supplier</h2>
<?php if ($error): ?><div class="alert"><?= htmlspecialchars($error); ?></div><?php endif; ?>
<form method="POST">
<div class="form-group"><label for="nama">Nama</label><input id="nama" name="nama" required value="<?= htmlspecialchars($_POST['nama'] ?? ''); ?>"></div>
<div class="form-group"><label for="telp">Telp</label><input id="telp" name="telp" value="<?= htmlspecialchars($_POST['telp'] ?? ''); ?>"></div>
<div class="form-group"><label for="alamat">Alamat</label><textarea id="alamat" name="alamat"><?= htmlspecialchars($_POST['alamat'] ?? ''); ?></textarea></div>
<button class="btn btn-simpan" type="submit">Simpan</button> <a class="btn btn-batal" href="supplier.php">Batal</a>
</form></div></body></html>

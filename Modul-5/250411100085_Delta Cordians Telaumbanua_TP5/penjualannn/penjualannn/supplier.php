<?php
require_once "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM supplier ORDER BY id ASC");
if (!$query) die("Query gagal: " . mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master Supplier</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Data Master Supplier</h2>
    <a class="btn btn-tambah" href="tambah_supplier.php">+ Tambah Supplier</a>
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] === 'berhasil'): ?>
        <div class="alert">Data supplier berhasil diproses.</div>
    <?php endif; ?>
    <table>
        <thead><tr><th>No</th><th>Nama</th><th>Telp</th><th>Alamat</th><th>Tindakan</th></tr></thead>
        <tbody>
        <?php $no = 1; while ($data = mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($data['nama']); ?></td>
                <td><?= htmlspecialchars($data['telp'] ?? '-'); ?></td>
                <td><?= nl2br(htmlspecialchars($data['alamat'] ?? '-')); ?></td>
                <td><div class="aksi">
                    <a class="btn btn-edit" href="edit_supplier.php?id=<?= urlencode($data['id']); ?>">Edit</a>
                    <a class="btn btn-hapus" href="hapus_supplier.php?id=<?= urlencode($data['id']); ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </div></td>
            </tr>
        <?php endwhile; ?>
        <?php if (mysqli_num_rows($query) === 0): ?><tr><td colspan="5">Belum ada data supplier.</td></tr><?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>

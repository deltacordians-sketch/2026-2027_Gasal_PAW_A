<?php
require_once "koneksi.php";
$id = $_GET['id'] ?? '';
if ($id === '') { header("Location: supplier.php"); exit; }
$stmt = mysqli_prepare($koneksi, "DELETE FROM supplier WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
if (!mysqli_stmt_execute($stmt)) {
    die("Data tidak dapat dihapus. Pastikan supplier tidak sedang digunakan oleh data barang. <a href='supplier.php'>Kembali</a>");
}
header("Location: supplier.php?pesan=berhasil");
exit;
?>

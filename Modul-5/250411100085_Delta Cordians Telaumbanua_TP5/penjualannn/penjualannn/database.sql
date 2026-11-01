CREATE DATABASE IF NOT EXISTS tp_modul5;
USE tp_modul5;

CREATE TABLE IF NOT EXISTS pelanggan (
    id VARCHAR(20) NOT NULL PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('L','P') NOT NULL,
    telp VARCHAR(12),
    alamat TEXT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS supplier (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    telp VARCHAR(12),
    alamat TEXT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS barang (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    kode_barang VARCHAR(10) NOT NULL,
    nama_barang VARCHAR(100) NOT NULL,
    harga INT(11) NOT NULL,
    stok INT(11) NOT NULL,
    supplier_id INT(11),
    CONSTRAINT fk_barang_supplier FOREIGN KEY (supplier_id) REFERENCES supplier(id)
      ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS transaksi (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    waktu_transaksi DATE NOT NULL,
    keterangan TEXT,
    total INT(11) NOT NULL,
    pelanggan_id VARCHAR(20),
    CONSTRAINT fk_transaksi_pelanggan FOREIGN KEY (pelanggan_id) REFERENCES pelanggan(id)
      ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS transaksi_detail (
    transaksi_id INT(11) NOT NULL,
    barang_id INT(11) NOT NULL,
    harga INT(11) NOT NULL,
    qty INT(11) NOT NULL,
    PRIMARY KEY (transaksi_id, barang_id),
    CONSTRAINT fk_detail_transaksi FOREIGN KEY (transaksi_id) REFERENCES transaksi(id)
      ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_detail_barang FOREIGN KEY (barang_id) REFERENCES barang(id)
      ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS pembayaran (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    waktu_bayar DATETIME NOT NULL,
    total INT(11) NOT NULL,
    metode ENUM('TUNAI','TRANSFER','EDC') NOT NULL,
    transaksi_id INT(11),
    CONSTRAINT fk_pembayaran_transaksi FOREIGN KEY (transaksi_id) REFERENCES transaksi(id)
      ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `user` (
    id_user TINYINT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(35) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(150),
    hp VARCHAR(20),
    level TINYINT(1) NOT NULL
) ENGINE=InnoDB;

-- Data contoh supplier (opsional). Tambahkan/import data tugas Anda jika sudah tersedia.
INSERT INTO supplier (nama, telp, alamat) VALUES
('PT Sumber Makmur', '081234567801', 'Surabaya'),
('CV Berkah Jaya', '081234567802', 'Sidoarjo'),
('UD Mitra Sejahtera', '081234567803', 'Gresik');

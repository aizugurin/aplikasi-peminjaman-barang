<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

// ambil data
$sql = "SELECT b.nama_barang, b.jenis, d.jumlah, d.peminjam, p.tgl_pinjam, p.tgl_kembali, u.nama FROM detail_pinjam AS d INNER JOIN barang AS b ON d.id_barang = b.id_barang INNER JOIN peminjaman AS p ON d.id_peminjaman = p.id_peminjaman INNER JOIN users AS u ON p.id_user = u.id_user";
$query = $conn->query($sql);
$data_peminjaman = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';
require_once 'includes/detail-peminjaman.php';
require_once 'includes/footer.php';
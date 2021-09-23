<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../../index.php');
}

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$ruang = $_POST['ruang'];
$kondisi = $_POST['kondisi'];
$ket = $_POST['ket'];
$tgl_regis = date('Y-m-d');
$petugas = $_SESSION['id_user'];

$update = $conn->query("UPDATE barang SET nama_barang = '$nama_barang', jenis = '$jenis', jumlah = '$jumlah', ruang = '$ruang', kondisi = '$kondisi', keterangan = '$ket' WHERE id_barang = '$id'");

if ($update) {
	header('Location: ../data-barang.php');
} else {
	header('Location: ../data-barang.php?h=edit-barang');
}
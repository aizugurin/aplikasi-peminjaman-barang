<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM users WHERE id_level = 2";
$query = $conn->query($sql);
$data = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';

if (!isset($_GET['h'])) {
	require_once 'includes/petugas.php';	
} else if ($_GET['h'] == 'tambah-petugas') {
	require_once 'includes/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'detail-petugas') {
	require_once 'includes/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'edit-petugas') {
	require_once 'includes/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'hapus-petugas') {
	$hapus = $conn->query("DELETE FROM users WHERE id_user ='".$_GET['id']."'");

	if ($hapus) {
		header('Location: data-petugas.php');
	} else {
		header('Location: data-petugas.php');
	}
}
require_once 'includes/footer.php';
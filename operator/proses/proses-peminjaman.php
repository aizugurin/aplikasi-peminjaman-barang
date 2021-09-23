<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$dt_pinjam = NULL;

if(isset($_POST['submit']) && isset($_SESSION['list_peminjaman'])) {
	foreach ($_SESSION['list_peminjaman'] as $list) {
		$explode = explode("-", $list['nama_barang']);
		$nama_barang = trim($explode[0]);
		$jenis = trim($explode[1]);

		$barang = $conn->query("SELECT * FROM barang WHERE nama_barang='$nama_barang' AND jenis = '$jenis'");
		$dt_barang = $barang->fetch_assoc();

		$sisa = ($dt_barang['jumlah'] - $list['jumlah_pinjam']);

		$update_dt_brg = $conn->query("UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");

		$tgl_peminjaman = date('Y-m-d');
		$tgl_pengembalian = $_POST['tgl-pengembalian'];
		$peminjam = $_POST['peminjam'];
		$id_user = $_POST['id_user'];

		$peminjaman = $conn->query("INSERT INTO peminjaman VALUES ('', '$id_user', '$tgl_peminjaman', '$tgl_pengembalian')");

		$detail_pinjam = $conn->query("INSERT INTO detail_pinjam VALUES ('', '$list[id_barang]', '$list[jumlah_pinjam]', '$peminjam', (SELECT id_peminjaman FROM peminjaman ORDER BY id_peminjaman DESC LIMIT 1))");

		$update_dt_brg = $conn->query("UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");
	}	
	unset($_SESSION['list_peminjaman']);
}
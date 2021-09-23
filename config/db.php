<?php
try {
	$conn = new mysqli('localhost:3307', 'root', '','peminjaman-barang');
} catch (Exception $e) {
	echo $e->getMessage();
}
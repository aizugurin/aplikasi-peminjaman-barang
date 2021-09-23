<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../../index.php');
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$sebagai = $_POST['sebagai'];
$sebagai == "Operator" ? $sebagai = 2 : $sebagai = 1;

$update = $conn->query("UPDATE users SET nama = '$nama', username = '$username', id_level = '$sebagai' WHERE id_user = '$id'");

if ($update) {
	header('Location: ../data-petugas.php');
} else {
	header('Location: ../data-petugas.php?h=edit-petugas');
}
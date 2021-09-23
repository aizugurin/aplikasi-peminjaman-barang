<?php
session_start();
require_once '../config/db.php';

$username = $conn->real_escape_string($_POST['username']);
$password = sha1($conn->real_escape_string($_POST['password']));
$level = $_POST['level'];

if(empty($username) || empty($password) || empty($level)) {
	header('Location: ../index.php');
}

$sql = "SELECT * FROM users WHERE username = '" .$username. "' AND password = '" .$password. "' AND id_level = '" .$level. "'";
$query = $conn->query($sql);

if($query->num_rows > 0) {
	while ($result = $query->fetch_assoc()) {
		$_SESSION['nama'] = $result['nama'];
		$_SESSION['id_user'] = $result['id_user'];
		
		if($result['id_level'] == 1) {
			header('Location: ../admin/index.php');
		} else {
			header('Location: ../operator/index.php');
		}
	}
} else {
	$_SESSION['error'] = "Data yang anda masukan salah, silahkan coba lagi";
	header('Location: ../index.php');
}
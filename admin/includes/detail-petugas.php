<div class="container mt-5">
	<h2>Detail Petugas</h2>
	<hr>
	<a href="data-petugas.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<?php 
		$sql = $conn->query("SELECT * FROM users WHERE id_user = '".$_GET['id']."'");
		$data = $sql->fetch_assoc();
		$data['id_level'] == 1 ? $sebagai = "Admin" : $sebagai = "Operator";
	?>

	<div class="card mt-3">
		<div class="card-header"><?= $data['nama']; ?></div>
		<div class="card-body">
			<p>Username : <?= $data['username']; ?></p>
			<p>Sebagai : <?= $sebagai; ?></p>
		</div>
	</div>
</div>
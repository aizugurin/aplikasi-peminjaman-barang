<div class="container mt-5">
	<h2>Edit Data Petugas</h2>
	<hr>
	<a href="data-petugas.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<?php 
		$petugas = $conn->query("SELECT * FROM users WHERE id_user = '".$_GET['id']."'");
		$data = $petugas->fetch_assoc();
		$data['id_level'] == 1 ? $sebagai = "Admin" : $sebagai = "Operator";
	?>

	<form action="proses/proses-ubah-petugas.php" method="POST" class="mt-3" autocomplete="off">
		<div class="form-group">
			<label for="nama">Nama Petugas</label>
			<input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control" autofocus required>
		</div>

		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" value="<?= $data['username']; ?>" class="form-control" autofocus required>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" value="<?= $data['password']; ?>" class="form-control" required readonly>
		</div>

		<div class="form-group">
			<label for="sebagai">Sebagai</label>
			<input type="text" name="sebagai" value="<?= $sebagai; ?>" class="form-control" required>
		</div>

		<input type="hidden" name="id" value="<?= $data['id_user']; ?>">
		<button type="submit" name="submit" class="btn btn-primary float-right">Edit Petugas</button>
	</form>
</div>
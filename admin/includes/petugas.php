<div class="container mt-5">
	<h2>Data Petugas</h2>
	<hr>
	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<a href="?h=tambah-petugas" class="btn btn-primary btn-sm float-right">Tambah Petugas</a>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Petugas</th>
				<th>Username</th>
				<th>Password</th>
				<th>Sebagai</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($data as $r): $r['id_level'] == 2 ? $sebagai = "Operator" : $sebagai = "Admin"; ?>

			<tr>
				<td><?= $no++ ?></td>
				<td><?= $r['nama']; ?></td>
				<td><?= $r['username']; ?></td>
				<td><?= $r['password']; ?></td>
				<td><?= $sebagai; ?></td>

				<td>
					<div class="d-inline">
						<a href="?h=detail-petugas&id=<?= $r['id_user']; ?>" class="btn btn-primary btn-sm">Detail</a>
						<a href="?h=edit-petugas&id=<?= $r['id_user']; ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="?h=hapus-petugas&id=<?= $r['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
					</div>
				</td>
			</tr>
			
			<?php endforeach ?>
		</tbody>
	</table>
</div>
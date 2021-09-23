<div class="container mt-5">
	<h2>Data Barang</h2>
	<hr>
	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<a href="?p=tambah-barang" class="btn btn-primary btn-sm float-right">Tambah Data</a>

	<div class="clearfix"></div>
	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Kondisi</th>
				<th>Jumlah</th>
				<th>Jenis</th>
				<th>Tgl. Regis</th>
				<th>Ruang</th>
				<th>Petugas</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($data_barang as $barang) : ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $barang['nama_barang']; ?></td>
				<td><?= $barang['kondisi']; ?></td>
				<td><?= $barang['jumlah']; ?></td>
				<td><?= $barang['jenis']; ?></td>
				<td><?= $barang['tgl_regis']; ?></td>
				<td><?= $barang['ruang']; ?></td>
				<td><?= $barang['nama']; ?></td>
				
				<td>
					<div class="d-inline">
						<a href="?p=detail-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-primary btn-sm">Detail</a>
						<a href="?p=edit-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="?p=hapus-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
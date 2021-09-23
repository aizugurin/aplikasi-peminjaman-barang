<div class="container mt-5">
	<h2>Data Barang</h2>
	<hr>
	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Kondisi</th>
				<th>Jumlah</th>
				<th>Jenis</th>
				<th>Tanggal Regis</th>
				<th>Ruang</th>
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
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
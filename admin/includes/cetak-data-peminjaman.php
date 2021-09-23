<div class="container mt-5">
	<h2>Data Peminjaman</h2>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Jenis</th>
				<th>Jumlah Pinjam</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Peminjam</th>
				<th>Petugas</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($data_peminjaman as $data) : ?>

			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama_barang']; ?></td>
				<td><?= $data['jenis']; ?></td>
				<td><?= $data['jumlah']; ?></td>
				<td><?= $data['tgl_pinjam']; ?></td>
				<td><?= $data['tgl_kembali']; ?></td>
				<td><?= $data['peminjam']; ?></td>
				<td><?= $data['nama']; ?></td>
			</tr>

			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	window.print();
</script>
<div class="container mt-5">
	<div class="row text-center">
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<?php 
						$sql = $conn->query("SELECT COUNT(*) AS jmlPinjam FROM detail_pinjam");
						$pinjam = $sql->fetch_assoc();
					?>
					<h5 class="card-title">Data Peminjaman</h5>
					<p class="card-text">Data barang yang dipinjam</p>
					<h4><?= $pinjam['jmlPinjam']; ?></h4>
					<a href="data-peminjaman.php" class="card-link">Lihat Data Peminjaman</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<?php 
						$sql = $conn->query("SELECT COUNT(*) AS jmlBarang FROM barang");
						$barang = $sql->fetch_assoc();
					?>
					<h5 class="card-title">Data Barang</h5>
					<p class="card-text">Jumlah barang saat ini</p>
					<h3><?= $barang['jmlBarang'] ?></h3>
					<a href="data-barang.php" class="card-link">Lihat Data Barang</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<?php 
						$sql = $conn->query("SELECT COUNT(*) AS jmlOpt FROM users WHERE id_level = 2");
						$opt = $sql->fetch_assoc();
					?>
					<h5 class="card-title">Data Petugas</h5>
					<p class="card-text">Jumlah petugas saat ini</p>
					<h3><?= $opt['jmlOpt'] ?></h3>
					<a href="data-petugas.php" class="card-link">Lihat Data Petugas</a>
				</div>
			</div>
		</div>
	</div>
</div>
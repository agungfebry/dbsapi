<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon bg-primary">
				<i class="far fa-user"></i>
			</div>
			<div class="card-wrap">
				<div class="card-header">
					<h4>Admin</h4>
				</div>
				<div class="card-body">
					<?= $countAdmin; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon bg-success">
				<i class="fas fa-mountain"></i>
			</div>
			<div class="card-wrap">
				<div class="card-header">
					<h4>Wisata</h4>
				</div>
				<div class="card-body">
					<?= $countWisata > 0 ? $countWisata : "0" ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon bg-warning">
				<i class="fas fa-list"></i>
			</div>
			<div class="card-wrap">
				<div class="card-header">
					<h4>Fasilitas Umum</h4>
				</div>
				<div class="card-body">
					<?= $countFasum; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon bg-secondary">
				<i class="fas fa-users"></i>
			</div>
			<div class="card-wrap">
				<div class="card-header">
					<h4>Others</h4>
				</div>
				<div class="card-body">
					0
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6 col-md-12 col-12 col-sm-12">
		<div class="card">
			<div class="card-header">
				<h4>Destinasi Wisata</h4>
				<div class="ml-auto">
					<a href="<?= base_url(); ?>wisata/" class="btn btn-success">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</div>
			</div>
			<div class="card-body p-0">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Jenis Destinasi</th>
						</tr>
						<?php $i = 1; ?>
						<?php foreach ($wisata as $row) : ?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['alamat'] ?></td>
								<td><?= $row['jenis_wisata'] ?></td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</table>
				</div>
				<div class="card-footer text-right">
					<nav class="d-inline-block">
						<ul class="pagination mb-0">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
							<li class="page-item">
								<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-12 col-12 col-sm-12">
		<div class="card">
			<div class="card-header">
				<h4>Fasilitas Umum</h4>
				<div class="ml-auto">
					<a href="<?= base_url(); ?>wisata/" class="btn btn-success">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</div>
			</div>
			<div class="card-body p-0">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Jenis Fasilitas</th>
						</tr>
						<?php $i = 1; ?>
						<?php foreach ($fasum as $row) : ?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['alamat'] ?></td>
								<td><?= $row['jenis_fasilitas'] ?></td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</table>
				</div>
				<div class="card-footer text-right">
					<nav class="d-inline-block">
						<ul class="pagination mb-0">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
							<li class="page-item">
								<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
</div>
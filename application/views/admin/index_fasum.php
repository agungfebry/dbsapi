<div class="row">
	<div class="col-12">
		<div class="card">
			<?php if ($this->session->flashdata('flash')): ?>
				<div class="alert alert-success alert-dismissible show fade my-3 mx-3">
					<div class="alert-body">
						<button class="close" data-dismiss="alert">
							<span>&times;</span>
						</button>
						Data <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="card-header">
				<h4>Tabel Destinasi</h4>
				<div class="ml-auto">
					<a href="<?= base_url(); ?>fasilitasumum/tambahFasilitas" class="btn btn-primary rounded">
						<i class="fas fa-folder-plus mr-1"></i>
						Tambah
					</a>
				</div>
			</div>
			<div class="card-body px-1">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Longitude</th>
							<th>Latitutde</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
						<?php $i = 1; ?>
						<?php foreach ($menu as $row) : ?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['alamat']; ?></td>
								<td><?= $row['longitude']; ?></td>
								<td><?= $row['latitude']; ?></td>
								<td>
									<img src="<?= base_url('assets/img/upload/').$row['foto']; ?>" class="img-fluid" width="60">
								</td>
								<td>
									<a href="<?= base_url(); ?>fasilitasumum/editFasilitas/<?= $row['id']; ?>" class="badge badge-success px-2 py-1">Edit</a>
									<a href="<?= base_url(); ?>wisata/deleteWisata/<?= $row['id']; ?>" class="badge badge-danger px-2 py-1 delete">Delete</a>
								</td>
								<?php $i++; ?>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
			<div class="card-footer text-right">
				<nav class="d-inline-block">
					<ul class="pagination mb-0">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

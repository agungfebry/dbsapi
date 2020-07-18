	<div class="row">
		<div class="col-7">
			<div class="card">

				<div class="card-header">
					<h4>Tabel Jenis Wisata</h4>
				</div>
				<?php if ($this->session->flashdata('flash')): ?>
					<div class="alert alert-success alert-dismissible show fade my-3 mx-3 shadow">
						<div class="alert-body">
							<button class="close" data-dismiss="alert">
								<span>&times;</span>
							</button>
							Data <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
						</div>
					</div>
				<?php endif; ?>
				 
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<th>#</th>
								<th>Jenis Wisata</th>							
								<th>Action</th>
							</tr>
							<?php $i = 1; ?>
							<?php foreach ($menu as $row) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $row['jenis_wisata']; ?></td>
									<td>
										<a href="#" class="badge badge-success px-2 py-1 btn-edit" data-id="<?= $row['id']; ?>">Edit</a>
										<a href="<?= base_url(); ?>wisata/deleteJenisWisata/<?= $row['id']; ?>" class="badge badge-danger px-2 py-1 delete">Delete</a>
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
								<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="col-5">
			<div class="card">
				<div class="card-header">
					<h4 id="labelJenisWisata">Tambah Jenis Wisata</h4>
				</div>
				<form action="<?= base_url(); ?>wisata/tambahJenisWisata" method="post">
					<input type="hidden" name="id" id="id">
					<div class="card-body">
						<div class="form-group">
							<label for="jenis_wisata">Jenis Wisata</label>
							<input type="text" name="jenis_wisata" id="jenis_wisata" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">
							<i class="fab fa-telegram-plane mr-1"></i>
							Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

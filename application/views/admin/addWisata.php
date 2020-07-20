<div class="card mt-2">
	<div class="card-body">
		<?php if ($this->session->flashdata('flash')) : ?>
			<div class="alert alert-primary alert-dismissible show fade">
				<div class="alert-body">
					<button class="close" data-dismiss="alert">
						<span>&times;</span>
					</button>
					Data <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
				</div>
			</div>
		<?php endif; ?>

		<?= form_open_multipart(''); ?>
		<div class="row">
			<div class="col">
				<a href="<?= base_url(); ?>wisata/">
					<i class="fas fa-undo-alt mr-1"></i>
					Kembali
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="card-body">
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nama">Nama Destinasi</label>
							<input type="text" name="nama" id="nama" class="form-control" value="<?= set_value('nama'); ?>">
							<?= form_error('nama', '<small class="text-danger">','</small>'); ?>
						</div>
						<div class="form-group col-md-4" id="jenisWisata">
							<label for="jenis_wisata">Jenis Destinasi</label>
							<input type="text" name="jenis_wisata" id="jenis_wisata" class="form-control" value="<?= set_value('jenis_wisata'); ?>">
							<?= form_error('jenis_wisata', '<small class="text-danger">','</small>'); ?>

						</div>
					</div>


					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" id="alamat" class="form-control" value="<?= set_value('alamat'); ?>">
						<?= form_error('alamat', '<small class="text-danger">','</small>'); ?>
					</div>

					<div class="form-row">
						<div class="form-group col-md-7">
							<label for="tiket">Tiket Masuk</label>
							<input type="text" name="tiket" id="tiket" class="form-control" value="<?= set_value('tiket'); ?>">
							<?= form_error('tiket', '<small class="text-danger">','</small>'); ?>
						</div>
						<div class="form-group col-md-5">
							<label for="harga_tiket">Idr *</label>
							<input type="text" name="harga_tiket" id="harga_tiket" class="form-control" value="<?= set_value('harga_tiket'); ?>">
							<?= form_error('harga_tiket', '<small class="text-danger">','</small>'); ?>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-7">
							<label for="fasilitas">Fasilitas</label>
							<input type="text" name="fasilitas[]" id="fasilitas" class="form-control" value="<?= set_value('fasilitas[]'); ?>">
							<?= form_error('fasilitas[]', '<small class="text-danger">','</small>'); ?>
						</div>
						<div class="form-group col-md-5">
							<label for="idr_fasilitas">Idr *</label>
							<input type="text" name="idr_fasilitas[]" id="idr_fasilitas" class="form-control" value="<?= set_value('idr_fasilitas[]'); ?>">
							<?= form_error('idr_fasilitas[]', '<small class="text-danger">','</small>'); ?>
						</div>
					</div>

					<div class="form-row tambah_fasilitas">
					</div>

					<div class="form-group mt-n3">
						<button class="btn btn-success btn-sm px-3" type="button" id="tambah_fasilitas">
							<i class="fa fa-plus mr-1"></i>
							Tambah
						</button>
					</div>

					<div class="form-group">
						<label for="wahana">Wahana</label>
						<input type="text" name="wahana" id="wahana" class="form-control" value="<?= set_value('wahana'); ?>">
						<?= form_error('wahana', '<small class="text-danger">','</small>'); ?>
					</div>
					<div class="form-row">
						<div class="form-group col-md-7">
							<label for="hari_operasional">Hari Operasional</label>
							<input type="text" name="hari_operasional[]" id="hari_operasional" class="form-control" value="<?= set_value('hari_operasional[]'); ?>">
							<?= form_error('hari_operasional[]', '<small class="text-danger">','</small>'); ?>
						</div>
						<div class="form-group col-md-5">
							<label for="jam_operasional">Jam</label>
							<input type="text" name="jam_operasional[]" id="jam_operasional" class="form-control" value="<?= set_value('jam_operasional[]'); ?>">
							<?= form_error('jam_operasional[]', '<small class="text-danger">','</small>'); ?>
						</div>
					</div>

					<div class="form-row tambah_operasional">
					</div>

					<div class="form-group mt-n3">
						<button class="btn btn-success btn-sm px-3" type="button" id="tambah_operasional">
							<i class="fa fa-plus mr-1"></i>
							Tambah
						</button>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card-body">
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<textarea type="text" name="deskripsi" id="deskripsi" class="form-control h-100" rows="5" cols="5">
							<?= set_value('deskripsi'); ?>
						</textarea>
						<?= form_error('deskripsi', '<small class="text-danger">','</small>'); ?>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="longitude">Longitude</label>
							<input type="text" name="longitude" id="longitude" class="form-control" readonly value="<?= set_value('longitude'); ?>">
							<?= form_error('longitude', '<small class="text-danger">','</small>'); ?>
						</div>
						<div class="form-group col-md-6">
							<label for="latitude">Latitude</label>
							<input type="text" name="latitude" id="latitude" class="form-control" readonly value="<?= set_value('latitude'); ?>">
							<?= form_error('latitude', '<small class="text-danger">','</small>'); ?>
						</div>
					</div>
					
					<div class="form-group">
						<?= $map['html']; ?>
					</div>

					<div class="form-group">
						<label for="customFile">Gambar</label>
						<div class="custom-file">
							<input type="file" id="customFile" name="photo" class="custom-file-input">
							<label class="custom-file-label" for="customFile">Choose file</label>
							<?= form_error('photo', '<small class="text-danger">','</small>'); ?>
						</div>
					</div>
				</div>
				<div class="card-footer mt-n2">
					<button type="submit" name="submit" value="submit" class="btn btn-primary px-3">
						<i class="fab fa-telegram-plane mr-1"></i>
						Simpan
					</button>
				</div>
			</div>
		</div>
		<?= form_close(); ?>
	</div>
</div>


<!-- Modal Open Maps -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Modal body text goes here.</p>
			</div>
			<div class="modal-footer bg-whitesmoke br">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
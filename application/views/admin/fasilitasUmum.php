<div class="card mt-2">
	<div class="row mt-3 ml-2">
		<div class="col">
			<a href="<?= base_url(); ?>fasilitasumum/">
				<i class="fas fa-undo-alt mr-1"></i>
				Kembali
			</a>
		</div>
	</div>

	<div class="card-body mt-n4">
		<?php if ($this->session->flashdata('flash')): ?>
			<div class="alert alert-primary alert-dismissible show fade">
				<div class="alert-body">
					<button class="close" data-dismiss="alert">
						<span>&times;</span>
					</button>
					Data <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
				</div>
			</div>
		<?php endif; ?>

		<?= form_open_multipart('Fasilitasumum/tambahFasilitas'); ?>
		<div class="row">
			<div class="col-6">
				<div class="card-body">
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nama">Nama Destinasi</label>
							<input type="text" name="nama" id="nama" class="form-control">
						</div>
						<div class="form-group col-md-4" id="jenisWisata">
							<label for="jenis_fasilitas">Jenis Fasilitas</label>
							<input type="text" name="jenis_fasilitas" id="jenis_fasilitas" class="form-control">

						</div>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea type="text" name="alamat" id="alamat" class="form-control h-100" rows="5" cols="10"> 	
						</textarea> 
					</div>
					<div class="form-group">
						<label for="inputAddress">Fasilitas</label>
						<input type="text" name="fasilitas" id="fasilitas" class="form-control">
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="longitude">Longitude</label>
							<input type="text" name="longitude" id="longitude" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label for="latitude">Latitude</label>
							<input type="text" name="latitude" id="latitude" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card-body">
					<div class="form-group">
						<label for="customFile">Gambar</label>
						<div class="custom-file">
							<input type="file" id="customFile" name="foto" class="custom-file-input" >
							<label class="custom-file-label" for="customFile">Choose File</label>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">
						<i class="fab fa-telegram-plane mr-1"></i>
						Simpan
					</button>
				</div>
			</div>
		</div>
		<?= form_close(); ?>
	</div>

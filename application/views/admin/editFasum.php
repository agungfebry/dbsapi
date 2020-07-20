<div class="card mt-2">
	<?= form_open_multipart(); ?>
	<div class="row mt-3 ml-2">
		<div class="col">
			<a href="<?= base_url(); ?>wisata/">
				<i class="fas fa-arrow-left mr-1"></i>
				Kembali
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
			<div class="card-body">
				<div class="form-row">
					<input type="hidden" name="id" value="<?= $menu['id']; ?>">
					<div class="form-group col-md-8">
						<label for="nama">Nama Tempat</label>
						<input type="text" name="nama" id="nama" class="form-control" value="<?= $menu['nama']; ?>">
					</div>
					<div class="form-group col-md-4" id="jenisWisata">
						<label for="jenis_wisata">Jenis Fasilitas</label>
						<input type="text" name="jenis_fasilitas" id="jenis_fasilitas" class="form-control" value="<?= $menu['jenis_fasilitas']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $menu['alamat']; ?>">
				</div>

				<div class="form-group">
					<label for="inputAddress">Fasilitas</label>
					<input type="text" name="fasilitas" id="fasilitas" class="form-control" value="<?= $menu['fasilitas'] ?>">
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card-body">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="longitude">Longitude</label>
						<input type="text" name="longitude" id="longitude" class="form-control" value="<?= $menu['longitude']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="latitude">Latitude</label>
						<input type="text" name="latitude" id="latitude" class="form-control" value="<?= $menu['latitude']; ?>">
					</div>
				</div>

				<div class="form-group">
					<?= $map['html']; ?>
				</div>

				<div class="form-group">
					<label for="customFile">Gambar</label>
					<div class="custom-file">
						<input type="file" id="customFile" name="foto" class="custom-file-input">
						<label class="custom-file-label" for="customFile">
							<?= $menu['foto']; ?>
						</label>
					</div>
				</div>
			</div>
			<div class="card-footer mt-n2">
				<button type="submit" name="submit" value="submit" class="btn btn-primary px-3">
					<i class="fab fa-telegram-plane mr-1"></i>
					Simpan Perubahan
				</button>
			</div>
		</div>
	</div>
	<?= form_close(); ?>
</div>
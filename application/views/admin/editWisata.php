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
				<input type="hidden" name="id" value="<?= $menu['id']; ?>">
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="nama">Nama Destinasi</label>
						<input type="text" name="nama" id="nama" class="form-control" value="<?= $menu['nama']; ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="jenis_wisata">Jenis Destinasi</label>
						<input type="text" name="jenis_wisata" id="jenis_wisata" class="form-control" value="<?= $menu['jenis_wisata']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea type="text" name="alamat" id="alamat" class="form-control h-100" rows="5" cols="5">
						<?= $menu['alamat']; ?>
					</textarea>
				</div>

				<div class="form-group">
					<label for="fasilitas">Fasilitas</label>
					<input type="text" name="fasilitas" id="fasilitas" class="form-control" value="<?= $menu['fasilitas']; ?>">
				</div>

				<div class="form-group">
					<label for="wahana">Wahana</label>
					<input type="text" name="wahana" id="wahana" class="form-control" value="<?= $menu['wahana']; ?>">
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card-body">
				<div class="form-group">
					<label for="deskripsi">Deskripsi</label>
					<textarea type="text" name="deskripsi" id="deskripsi" class="form-control h-100" rows="5" cols="5">
						<?= $menu['deskripsi']; ?>
					</textarea>
				</div>

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
					<label for="customFile">Gambar</label>
					<div class="custom-file">
						<input type="file" id="customFile" name="photo" class="custom-file-input">
						<label class="custom-file-label" for="customFile">
							<?= $menu['photo']; ?>
						</label>
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
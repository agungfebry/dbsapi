/*$(function () {
	$(".btn-edit").on("click", function () {
		$(".card form").attr(
			"action",
			"http://localhost/project/skripsi/wisata/ubahJenisWisata"
		);

		$("#labelJenisWisata").html("Edit Jenis Wista");

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/project/skripsi/wisata/editJenisWisata",
			data: { id: id },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#jenis_wisata").val(data.jenis_wisata);
				$("#id").val(data.id);
			},
		});
	});
});

$(document).ready(function () {
	var sample_data = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace("value"),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: "<?php echo base_url(); ?>wisata/fetch",
		remote: {
			url: "<?php echo base_url(); ?>wisata/fetch/%QUERY",
			wildcard: "%QUERY",
		},
	});

	$("#jenisWisata .typeahead").typeahead(null, {
		nama: "sample_data",
		display: "jenis_wisata",
		source: sample_data,
		limit: 10,
		templates: {
			suggestion: Handlebars.compile(
				'<div class="row"><div class="col-md-12">{{jenis_wisata}}</div></div>'
			),
		},
	});
});
*/

$("#tambah_fasilitas").on("click", function () {
	$(".tambah_fasilitas").append(
		'<div class="form-group col-md-7">' +
			'<input type="text" name="fasilitas[]" id="fasilitas" class="form-control">' +
			"</div> " +
			'<div class="form-group col-md-5"> ' +
			' <input type="text" name="idr_fasilitas[]" id="idr_fasilitas" class="form-control">' +
			"</div>"
	);
});

/*jam operasional*/
$("#tambah_operasional").on("click", function () {
	$(".tambah_operasional").append(
		'<div class="form-group col-md-7">' +
			'<input type="text" name="hari_operasional[]" id="hari_operasional" class="form-control">' +
			"</div> " +
			'<div class="form-group col-md-5"> ' +
			' <input type="text" name="jam_operasional[]" id="jam_operasional" class="form-control">' +
			"</div>"
	);
});

function setToForm(longitude,latitude) {
	$('input[name="longitude"]').val(longitude);
	$('input[name="latitude"]').val(latitude);
}

console.log(setToForm);
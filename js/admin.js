$(document).ready(function () {
	// add form detail and delete form too
	var x = 1;
	var fieldHTML =
		'<div id="row' +
		x +
		'"><div class="field item form-group"><label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label><div class="col-md-6 col-sm-6"><select id="barang" name="namabarang[]" class="form-control" required><option value="">Choose..</option><?php foreach ($a as $b) : ?><option value="<?= $b->ALAT_ID; ?>"><?= $b->ALAT_NAMA; ?></option><?php endforeach ?></select></div></div><div class="field item form-group"><label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Barang<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah[]" required="required" /></div><div class="mt-2"><a type="button" title="Hapus kolom" id="' +
		x +
		'" class="del_button"><i style="font-size: 20px;" class="fa fa-minus"></i></a></div></div></div>';
	$("#add_button").click(function () {
		x++;
		$("#field-wrapper").append(fieldHTML);
		console.log("clecked");
	});
	$(document).on("click", ".del_button", function () {
		var button_id = $(this).attr("id");
		$("#row" + button_id + "").remove();
	});
	// Handle modal
	$(document).on("click", ".update", function () {
		var ids = $(this).data("id");
		//menggunakan fungsi ajax untuk pengambilan data
		$.ajax({
			url: "<?php echo base_url(); ?>peminjaman/modal",
			type: "POST",
			data: {
				ids: ids,
			},
			data_type: "json",
			success: function (data) {
				$("#modal-detail").modal("show");
				$("#noo").text("" + data.noo);
				$("#ALAT_NAMA").text("" + data.ALAT_NAMA);
				$("#JUMLAH").text("" + data.JUMLAH);
				alert(data.JUMLAH);
			},
		});
	});
});

$(document).ready(function () {
	var x = 1;
	var field =
		'<div id="row' +
		x +
		'"><div class="field item form-group"><label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input class="form-control" data-validate-length-range="6" data-validate-words="2" name="namabarang[]" required="required" /></div></div><div class="field item form-group"><label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Barang<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah[]" required="required" /></div><div class="mt-2"><a type="button" name="remove" id="' +
		x +
		'" title="Hapus kolom" class="del_button"><i style="font-size: 20px;" class="fa fa-minus"></i></a></div></div></div>';
	$("#add_button").click(function () {
		x++;
		$("#field-wrapper").append(field);
	});
	$(document).on("click", ".del_button", function () {
		var button_id = $(this).attr("id");
		$("#row" + button_id + "").remove();
	});
});

$(document).ready(function () {
	// add form detail and delete form too
	var x = 1;
	var field = $("#field-wrapper").clone();
	$("#add_button").click(function () {
		x++;
		$("#field-wrapper").append(field);
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

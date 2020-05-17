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
			url: "modal",
			type: "POST",
			data: {
				ids: ids,
			},
			data_type: "json",
			success: function (response) {
				var html;
			
				$.each(JSON.parse(response), function () {
					html += '<tr>';
					html += '<td><p>'+ss+'</p></td>'
					html += '<td><p>'+this['ALAT_NAMA']+'</p></td>'
					html += '<td><p>'+this['JUMLAH']+'</p></td>'
					$('#polo').html(html);
					
					$("#modal-detail").modal("show");

				});
			},
		});
	});
});

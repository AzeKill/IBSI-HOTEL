$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/chambreDelete.php",
		data: {table: "chambreDelete"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<div class='col-md-3 col-sm-12 col-xs-12'>"
				html += "<div class='panel panel-primary text-center no-boder bg-color-red'>"
				html += "<div class='panel-body'>"
				html += "<i class='fa fa-users fa-5x'></i>"
				html += "<h3>"+r.lit+"</h3>"
				html += "</div>"
				html += "<div class='panel-footer back-footer-red'>"
				html += r.type
				html += "</div>"
				html += "</div>"
				html += "</div>"
			}
			$("#chambreDelete").html(html);
		},
		error: function(){
			$("#chambreDelete").html("ERROR");
		}
	});
})
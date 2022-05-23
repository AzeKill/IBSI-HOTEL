$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/statutChambre.php",
		data: {table: "statutChambre"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<div class='col-md-3 col-sm-12 col-xs-12'>"
				html += "<div class='panel panel-primary text-center no-boder bg-color-blue'>"
				html += "<div class='panel-body'>"
				html += "<i class='fa fa-users fa-5x'></i>"
				html += "<h3>"+r.lit+"</h3>"
				html += "</div>"
				html += "<div class='panel-footer back-footer-blue'>"
				html += r.idChambre+" - "+r.type+" - "+r.place
				html += "</div>"
				html += "</div>"
				html += "</div>"
				
			}
			$("#statutChambre").html(html);
		},
		error: function(){
			$("#statutChambre").html("ERROR");
		}
	});
})
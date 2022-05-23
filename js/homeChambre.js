$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/homeChambre.php",
		data: {table: "reservationChambre"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<div class='col-md-3 col-sm-12 col-xs-12'>"
				html += "<div class='panel panel-primary text-center no-boder bg-color-blue'>"
				html += "<div class='panel-body'>"
				html += "<i class='fa fa-users fa-5x'></i>"
				html += "<h3>"+r.prenom+"</h3>"
				html += "</div>"
				html += "<div class='panel-footer back-footer-blue'>"
				html += "<a href='show.php?rid="+r.idReservation+"'class='btn btn-primary'>Show</a>"
				html += ''+r.typeChambre+''
				html += "</div>"
				html += "</div>"
				html += "</div>"

}
			$("#homeChambre").html(html);
		},
		error: function(){
			$("#homeChambre").html("ERROR");
		}
	});
})
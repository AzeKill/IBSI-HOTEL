$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/affichageAjoutChambre.php",
		data: {table: "affichageAjoutChambre"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<tr>"
				html += "<td>"+r.idChambre+"</td>"
				html += "<td>"+r.type+"</td>"
				html += "<th>"+r.lit+"</th>"
				html += "</tr>"
			}
			$("#affichageAjoutChambre").html(html);
		},
		error: function(){
			$("#affichageAjoutChambre").html("ERROR");
		}
	});
})
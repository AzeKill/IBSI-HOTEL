$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/affichageAbonnes.php",
		data: {table: "abonnes"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<tr>"
				html += "<td>"+r.idAbonnes+"</td>"
				html += "<td>"+r.email+"</td>"
				html += "<td>"+r.dateDebut+"</td>"
				html += "<td><form id='userFormDelAbonnes' method='POST'>"									
				html += "<div class='form-group'>"
				html += "<input type='hidden' id='"+r.idAbonnes+"' name='ida' value='"+r.idAbonnes+"'>"
				html += "<button type='submit' class='btn btn-primary'>Supprimer</button>"
				html += "</div>"
				html += "</form></td>"
				html += "</tr>"
			}
			$("#affichageAbonnes").html(html);
		},
		error: function(){
			$("#affichageAbonnes").html("ERROR");
		}
	});
})
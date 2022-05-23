$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/affichagePaiement.php",
		data: {table: "paiement"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
                html += "<tr>"
                html += "<td>"+r.titre+" "+r.prenom+" "+r.nom+"</td>"
                html += "<td>"+r.typeChambre+"</td>"
                html += "<td>"+r.typeLit+"</td>"
                html += "<td>"+r.dateEntree+"</td>"
                html += "<td>"+r.dateSortie+"</td>"
                html += "<td>"+r.nombreChambre+"</td>"
                html += "<td>"+r.restauration+"</td>"
                html += "<td><a href=impression.php?pid="+r.idPaie+" <button class='btn btn-primary'> <i class='fa fa-print'></i> Print</button></td>"
				html += "<td><form id='userFormDelPaiment' method='POST'>"									
				html += "<div class='form-group'>"
				html += "<input type='hidden' id='"+r.idPaie+"' name='ida' value='"+r.idPaie+"'>"
				html += "<button type='submit' class='btn btn-primary'>Supprimer</button>"
				html += "</div>"
				html += "</form></td>"
                html += "</tr>"
			}
			$("#affichagePaiement").html(html);
		},
		error: function(){
			$("#affichagePaiement").html("ERROR");
		}
	});
})
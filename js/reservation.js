$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/reservation.php",
		data: {table: "reservationchambre"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += '<tr>'
                html += '<td>'+r.idReservation+'</td>'
				html += '<td>'+r.titre+'</td>'
				html += '<td>'+r.prenom+' '+r.nom+'</td>'
				html += '<td>'+r.email+'</td>'
				html += '<td>'+r.nationalite+'</td>'
				html += '<td>'+r.pays+'</td>'
				html += '<td>'+r.telephone+'</td>'
				html += '<td>'+r.typeChambre+'</td>'
				html += '<td>'+r.lit+'</td>'
				html += '<td>'+r.nombreChambre+'</td>'
				html += '<td>'+r.restauration+'</td>'
				html += '<td>'+r.dateEntree+'</td>'
				html += '<td>'+r.dateSortie+'</td>'
				html += '<td>'+r.statut+'</td>'
				html += '<td>'+r.nombreJour+'</td>'
				html += "<td><a href='confirmerReservation.php?rid="+r.idReservation+"'class='btn btn-primary'>Action</a></td>"
                html += '</tr>'
			}
			$("#reservation").html(html);
		},
		error: function(){
			$("#reservation").html("ERROR");
		}
	});
})
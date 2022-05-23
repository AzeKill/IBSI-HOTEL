$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/affichageAdmin.php",
		data: {table: "admin"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<tr>"
				html += "<td>"+r.idAdmin+"</td>"
				html += "<td>"+r.adminName+"</td>"
				html += "<td>"+r.passwordAdmin+"</td>"
				html += "<td><form id='userFormDelAdmin' method='POST'>"									
				html += "<div class='form-group'>"
				html += "<input type='hidden' id='"+r.idAdmin+"' name='ida' value='"+r.idAdmin+"'>"
				html += "<button type='submit' class='btn btn-primary'>Supprimer</button>"
				html += "</div>"
				html += "</form></td>"
				html += "</tr>"
			}
			$("#admin").html(html);
		},
		error: function(){
			$("#admin").html("ERROR");
		}
	});
})
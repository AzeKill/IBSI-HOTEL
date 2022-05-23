$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/messageContact.php",
		data: {table: "contact"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += "<tr>"
				html += "<td>"+r.idContact+"</td>" 
				html += "<td>"+r.nomPrenom+"</td>"
				html += "<td>"+r.objet+"</td>"
				html += "<td>"+r.contactDate+"</td>"
				html += "<td>"+r.message+"</td>"
				html += "<td><button onclick='javascript:setIdRep("+r.idContact+");' class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'><i class='fa fa-edit' ></i> Répondre</button></td>"
				html += "</tr>"
			}
			$("#messageContact").html(html);
		},
		error: function(){
			$("#messageContact").html("ERROR");
		}
	});
})
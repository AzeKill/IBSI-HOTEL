$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "scripts/homeAbones.php",
		data: {table: "abonnes"},
		dataType: "json",
		success: function(data) {
			var html = "" ;
			for(var r of data) {
				html += '<tr>'
				html += '<th>'+r.idAbonnes+'</th>'
				html += '<th>'+r.email+'</th>'
				html += '<th>'+r.dateDebut+'</th>'
				html += '</tr>'
			}
			$("#homeAbonnes").html(html);
		},
		error: function(){
			$("#homeAbonnes").html("ERROR");
		}
	});
})
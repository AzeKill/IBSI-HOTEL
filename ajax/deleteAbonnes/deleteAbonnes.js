$(document).on('submit','#userFormDelAbonnes',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/deleteAbonnes/deleteAbonnes.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msg').html(data);
            $('#userFormDelAbonnes').find('input').val('')
        }
    });
});
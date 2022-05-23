$(document).on('submit','#ajoutAbonnes',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/ajoutAbonnes/ajoutAbonnes.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msgNouveauAbonnes').html(data);
            $('#ajoutAbonnes').find('input').val('')
        }
    });
});
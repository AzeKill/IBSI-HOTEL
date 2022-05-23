$(document).on('submit','#nouvelleNewsletter',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/nouvelleNewsletter/nouvelleNewsletter.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msgNouveauNews').html(data);
            $('#nouvelleNewsletter').find('input').val('')
        }
    });
});
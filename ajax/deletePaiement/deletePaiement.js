$(document).on('submit','#userFormDelPaiment',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/deletePaiement/deletePaiement.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msgdelPaiement').html(data);
            $('#userFormDelPaiment').find('input').val('')
        }
    });
});
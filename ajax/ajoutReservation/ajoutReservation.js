$(document).on('submit','#ajourReservation',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/ajoutReservation/ajoutReservation.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msg').html(data);
            $('#AjoutReservation').find('input').val('')
        }
    });
});
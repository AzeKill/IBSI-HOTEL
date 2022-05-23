$(document).on('submit','#userFormDelChambre',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/deleteChambre/deleteChambre.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msgdelChambre').html(data);
            $('#userFormDelChambre').find('input').val('')
        }
    });
});
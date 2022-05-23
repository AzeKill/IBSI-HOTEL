$(document).on('submit','#AjoutAdmin',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/ajoutAdmin/ajoutAdmin.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msg').html(data);
            $('#AjoutAdmin').find('input').val('')
        }
    });
});
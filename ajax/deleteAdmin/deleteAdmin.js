$(document).on('submit','#userFormDelAdmin',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "ajax/deleteAdmin/deleteAdmin.php",
    data:$(this).serialize(),
        success: function(data){
            $('#msg').html(data);
            $('#userFormDelAdmin').find('input').val('')
        }
    });
});
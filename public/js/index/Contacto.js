$(function(){
    $('#sendMessageButton').click(
               sendContact
             );
})

function sendContact()
                {
                  var nombre = $('#name').val();
                  var telefono = $('#email').val();
                  var correo = $('#phone').val();
                  var mensaje = $('#message').val();
                  $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }         
                    });
                  $.ajax( 
                  {
                    url: '/Contacto',
                    type: "post",
                    data: {
                      nombre:nombre,
                      telefono:telefono,
                      correo:correo,
                      mensaje:mensaje
                      },
                    success: function(response){ 
                    
                    alert(JSON.stringify(response)); 
                    },
                    error: function(response){
                    alert('Error'+JSON.stringify(response));
                    }
                  });
                }
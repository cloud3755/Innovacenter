 $(function() {
    initMap();

    $('#ocultar').hide();

    $("#btnquejas").on( "click", function() {
    $('#ocultar').fadeOut();
    $('#ocultar').fadeIn(4000);
    $('#tipomensaje').html('Queja')
    });

    $("#btncontacto").on( "click", function() {

    $('#ocultar').fadeOut();
    $('#ocultar').fadeIn(4000);

    $('#tipomensaje').html('Contactanos')
    });
});
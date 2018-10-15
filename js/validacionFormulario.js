
    // VALIDACION DEL FORMULARIO DE LOGIN //
$("#login").submit(function (e) { 
    e.preventDefault();

    var datosLogin = {
        user:$('#user').val(),
        pass:$('#pass').val()
    }
    
    $.get("login")
});
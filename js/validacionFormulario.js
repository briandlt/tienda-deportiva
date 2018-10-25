$(document).ready(function () {
    // VALIDACION DEL FORMULARIO DE LOGIN //

    $("#btnLogin").click(function (e) { 
        e.preventDefault();
        if($('#userLogin').val() == ''){
            toastr.error('Usuario es un campo obligatorio');
            $('#userLogin').focus().addClass('alertaValidacion');
        }else if($('#passLogin').val() == ''){
            toastr.error('Contraseña es un campo obligatorio');
            $('#passLogin').focus().addClass('alertaValidacion');
        }
        
    });

    $('#login>[type="text"], #login>[type="password"]').keyup(function (e) { 
        if($(this).val() != ''){
            $(this).removeClass('alertaValidacion');
        }
    });

    // VALIDACION DEL FORMULARIO DE NUEVA CUENTA //
    $('#btnAccount').click(function (e) { 
        e.preventDefault();
        if($("#newAccount>[name='nombre']").val() == ''){
            toastr.error('Nombre es un campo obligatorio');
            $("#newAccount>[name='nombre']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='apellido']").val() == ''){
            toastr.error('Apellido es un campo obligatorio');
            $("#newAccount>[name='apellido']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='telefono']").val() == ''){
            toastr.error('Teléfono es un campo obligatorio');
            $("#newAccount>[name='telefono']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='direccion']").val() == ''){
            toastr.error('Dirección es un campo obligatorio');
            $("#newAccount>[name='direccion']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='colonia']").val() == ''){
            toastr.error('Colonia es un campo obligatorio');
                $("#newAccount>[name='colonia']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='ciudad']").val() == ''){
            toastr.error('Ciudad es un campo obligatorio');
            $("#newAccount>[name='ciudad']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='estado']").val() == ''){
            toastr.error('Estado es un campo obligatorio');
            $("#newAccount>[name='estado']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='cp']").val() == ''){
            toastr.error('Código Postal es un campo obligatorio');
            $("#newAccount>[name='cp']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='mail']").val() == ''){
            toastr.error('Correo es un campo obligatorio');
            $("#newAccount>[name='mail']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='pass1']").val() == ''){
            toastr.error('Contraseña es un campo obligatorio');
            $("#newAccount>[name='pass1']").focus().addClass('alertaValidacion');
        }else if($("#newAccount>[name='pass2']").val() == ''){
            toastr.error('Confirme Contraseña es un campo obligatorio');
            $("#newAccount>[name='pass2']").focus().addClass('alertaValidacion');
        }

    });    

    $('#newAccount>[type="text"], #newAccount>[type="password"], #newAccount>[type="mail"]').keyup(function (e) { 
        if($(this).val() != ''){
            $(this).removeClass('alertaValidacion');
        }
    });
        
    //  CONFIGURACION DE LAS NOTIFICACIONES  //
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "show",
        "hideMethod": "fadeOut"
    }

});


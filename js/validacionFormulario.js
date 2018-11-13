$(document).ready(function () {
    
    // VALIDACION DEL FORMULARIO DE LOGIN //

    var userLogin = $('#userLogin');
    var passLogin = $('#passLogin');

    var string = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
    var validaMail = /\w+@\w+\.+[a-zA-Z]/; //Expresion regular para el email
    var validaTel = /^[0-9]{10}$/ //Expresion regular para el telefono

    $("#btnLogin").click(function (e) { 
        e.preventDefault();
        if(userLogin.val() == ''){
            toastr.error('Usuario es un campo obligatorio');
            userLogin.focus().addClass('alertaValidacion');
        }else if(passLogin.val() == ''){
            toastr.error('Contraseña es un campo obligatorio');
            passLogin.focus().addClass('alertaValidacion');
        }else if(!validaMail.test(userLogin.val())){
            toastr.error('Revise que el correo este escrito correctamente');
            userLogin.focus().addClass('alertaValidacion');
        }else{ // SI NO HAY ERRORES EN EL RELLENADO DEL FORMULARIO
            let user = userLogin.val();
            let pass = passLogin.val();
            $.ajax({
                type: "POST",
                // url: "controllers/cuenta.controller.php",
                data: {user, pass},
                success: function (response) {
                    console.log(response);
                    if(!response.error) {
                        let logueo = (response);
                        if(logueo == 'Usuario incorrecto'){
                            $('#userLogin').focus();
                            toastr.warning(logueo);
                        }else if(logueo == 'Contraseña incorrecta'){
                            toastr.warning(logueo);
                            $('#passLogin').focus();
                        }else{
                            // let sessionUser = JSON.parse(logueo);
                            // console.log(sessionUser);
                            window.location="http://localhost/deportiva-responsive/";
                        }
                    }else{
                        console.log('Error en la respuesta del servidor');
                    }
                },
                error : function(xhr, status) {
                    alert('Disculpe, hubo un problema');
                },
            });
        }
    });

    $('#login>[type="text"], #login>[type="password"]').keyup(function (e) { 
        if($(this).val() != ''){
            $(this).removeClass('alertaValidacion');
        }
    });

    // VALIDACION DEL FORMULARIO DE NUEVA CUENTA //

    var nombre, apellido, telefono, direccion, colonia, ciudad, estado, cp, mail, pass1, pass2;

    nombre = $('#nombre');
    apellido = $('#apellido');
    telefono = $('#telefono');
    direccion = $('#direccion');
    colonia = $('#colonia');
    ciudad = $('#ciudad');
    estado = $('#estado');
    cp = $('#cp');
    mail = $('#mail');
    pass1 = $('#pass1');
    pass2 = $('#pass2');
    validaMail = /\w+@\w+\.+[a-zA-Z]/; //Expresion regular para el email
    validaTel = /^[0-9]{10}$/

    $('#btnAccount').click(function (e) { 
        e.preventDefault();
            //NOMBRE//
        if(nombre.val() == ''){
            toastr.error('Nombre es un campo obligatorio');
            nombre.focus().addClass('alertaValidacion');
            return false;
        }else if(!string.test(nombre.val())){
            toastr.error('El nombre debe contener caracteres alfabeticos');
            nombre.focus().addClass('alertaValidacion');
            return false;
        }else if(nombre.val().length>30){
            toastr.error('El nombre debe ser menor o igual a 30 caracteres');
            nombre.focus().addClass('alertaValidacion');
            return false;
        }
            //APELLIDO//
        else if(apellido.val() == ''){
            toastr.error('Apellido es un campo obligatorio');
            apellido.focus().addClass('alertaValidacion');
            return false;
        }else if(!string.test(apellido.val())){
            toastr.error('El apellido debe contener caracteres alfabeticos');
            apellido.focus().addClass('alertaValidacion');
            return false;
        }else if(apellido.val().length>30){
            toastr.error('El apellido debe contener máximo 30 caracteres');
            apellido.focus().addClass('alertaValidacion');
            return false;
        }
            //TELEFONO//
        else if(telefono.val() == ''){
            toastr.error('Teléfono es un campo obligatorio');
            telefono.focus().addClass('alertaValidacion');
            return false;
        }else if(isNaN(telefono.val())){
            toastr.error('Ingrese valores numericos para el teléfono');
            telefono.focus().addClass('alertaValidacion');
            return false;
        }else if(!validaTel.test(telefono.val())){
            toastr.error('El teléfono debe de contener 8 ó 10 digitos');
            telefono.focus().addClass('alertaValidacion');
            return false;
        }
            //DIRECCION//
        else if(direccion.val() == ''){
            toastr.error('Dirección es un campo obligatorio');
            direccion.focus().addClass('alertaValidacion');
            return false;
        }else if(direccion.val().length>60){
            toastr.error('La dirección debe contener máximo 60 caracteres');
            direccion.focus().addClass('alertaValidacion');
            return false;
        }
            //COLONIA//
        else if(colonia.val() == ''){
            toastr.error('Colonia es un campo obligatorio');
            colonia.focus().addClass('alertaValidacion');
            return false;
        }else if(colonia.val().length>20){
            toastr.error('La colonia debe contener máximo 20 caracteres');
            colonia.focus().addClass('alertaValidacion');
            return false;
        }
            //CIUDAD//
        else if(ciudad.val() == ''){
            toastr.error('Ciudad es un campo obligatorio');
            ciudad.focus().addClass('alertaValidacion');
            return false;
        }else if(ciudad.val().length>30){
            toastr.error('La ciudad debe contener máximo 30 caracteres');
            ciudad.focus().addClass('alertaValidacion');
            return false;
        }        
            //ESTADO//
        else if(estado.val() == ''){
            toastr.error('Estado es un campo obligatorio');
            estado.focus().addClass('alertaValidacion');
            return false;
        }else if(estado.val().length>20){
            toastr.error('El estado debe contener máximo 20 caracteres');
            estado.focus().addClass('alertaValidacion');
            return false;
        }
            //CODIGO POSTAL//
        else if(cp.val() == ''){
            toastr.error('Código Postal es un campo obligatorio');
            cp.focus().addClass('alertaValidacion');
            return false;
        }else if(isNaN(cp.val())){
            toastr.error('Ingrese valores numericos para el código postal');
            cp.focus().addClass('alertaValidacion');
            return false;
        }else if(cp.val().length!=5){
            toastr.error('El código postal debe contener 5 digitos');
            cp.focus().addClass('alertaValidacion');
            return false;
        }
            //CORREO ELECTRONICO//
        else if(mail.val() == ''){
            toastr.error('Correo es un campo obligatorio');
            mail.focus().addClass('alertaValidacion');
            return false;
        }else if(!validaMail.test(mail.val())){
            toastr.error('Correo no valido');
            mail.focus().addClass('alertaValidacion');
            return false;
        }else if(mail.val().length>50){
            toastr.error('El correo debe contener máximo 50 caracteres');
            mail.focus().addClass('alertaValidacion');
            return false;
        }
            //PASSWORD 1//
        else if(pass1.val() == ''){
            toastr.error('Contraseña es un campo obligatorio');
            pass1.focus().addClass('alertaValidacion');
            return false;
        }else if(pass1.val().length<6 || pass1.val().length>16){
            toastr.error('La contraseña debe contener entre 6 y 16 caracteres');
            pass1.focus().addClass('alertaValidacion');
            return false;
        }
            //PASSWORD 2//
        else if(pass2.val() == ''){
            toastr.error('Confirme Contraseña es un campo obligatorio');
            pass2.focus().addClass('alertaValidacion');
            return false;
        }else if(pass1.val() !== pass2.val()){
            toastr.error('Las contraseñas no coinciden');
            pass2.focus().addClass('alertaValidacion'); 
            return false;
        }else{ // SI NO HAY ERRORES EN EL RELLENADO DEL FORMULARIO
            let nombre1 = nombre.val();
            let apellido1 = apellido.val();
            let telefono1 = telefono.val();
            let direccion1 = direccion.val();
            let colonia1 = colonia.val();
            let ciudad1 = ciudad.val();
            let estado1 = estado.val();
            let cp1 = cp.val();
            let mail1 = mail.val();
            let pass = pass1.val();
            $.ajax({
                type: "POST",
                // url: "controllers/cuenta.controller.php",
                data: {nombre1, apellido1, telefono1, direccion1, colonia1, ciudad1, estado1, cp1, mail1, pass},
                success: function (response) {
                    if(!response.error) {
                        let acount = (response);
                        console.log(response);
                        if(acount == 'Registro exitoso'){
                            $('.iziModal-button-close').click();
                            $('#login').click();
                            toastr.success(acount);
                            $('#newAccount input:not(#btnAccount)').val("");
                        }else{
                            toastr.warning(acount);                            
                        }
                    }else{
                        console.log('Error en la respuesta del servidor');
                    }
                },
                error : function(xhr, status) {
                    alert('Disculpe, hubo un problema');
                },
            });
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


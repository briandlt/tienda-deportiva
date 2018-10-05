$(document).ready(function () {

            // BARRA DE NAVEGACION DESPLEGABLE //
    var oculto = true;
    $(".menuIcon").click(function(e){
        e.preventDefault();
        $('#navbar').slideToggle();
    });

    // CATEGORIAS DESPLEGABLES //   

    $(".menu li.catego").click(function (e) {
        // e.preventDefault();
        $(".submenu").slideToggle();
        $(".menu li span.flecha").toggleClass('icon-circle-down');
        $(".menu li span.flecha").toggleClass('icon-circle-up');
    });



});
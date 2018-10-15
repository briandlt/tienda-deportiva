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

    // MODAL DE LOGIN //

    $(document).on('click', '#sesion', function (e) {
        e.preventDefault();
        // $('#modal').iziModal('setZindex', 99999);
        // $('#modal').iziModal('open', { zindex: 99999 });
        $('#modal').iziModal('open');
    });

    $("#modal").iziModal({
        title: 'Ingresar',
        subtitle: 'Sport-Shop',
        headerColor: '#2d095c',
        background: null,
        theme: '',  // light
        icon: null,
        iconText: null,
        iconColor: '',
        rtl: false,
        width: 600,
        top: 80,
        bottom: null,
        borderBottom: true,
        padding: 0,
        radius: null,
        zindex: 999,
        iframe: false,
        iframeHeight: 400,
        iframeURL: null,
        focusInput: true,
        group: '',
        loop: false,
        arrowKeys: true,
        navigateCaption: true,
        navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
        history: false,
        restoreDefaultContent: false,
        autoOpen: 0, // Boolean, Number
        bodyOverflow: false,
        fullscreen: false,
        openFullscreen: false, //abrir el modal avarcando el tamaño total de la pantalla
        closeOnEscape: true,
        closeButton: true,
        appendTo: 'body', // or false
        appendToOverlay: 'body', // or false
        overlay: true,
        overlayClose: true,
        overlayColor: 'rgba(0, 0, 0, .7)',
        timeout: false, //tiempo en milisegundos para que se cierre automaticamente el modal
        timeoutProgressbar: false, //barra de progreso de tiempo restante para cerrar el modal
        pauseOnHover: false,
        timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
        transitionIn: 'comingIn',   // comingIn, bounceInDown, bounceInUp, fadeInDown, fadeInUp, fadeInLeft, fadeInRight, flipInX
        transitionOut: 'fadeOutUp', // comingOut, bounceOutDown, bounceOutUp, fadeOutDown, fadeOutUp, , fadeOutLeft, fadeOutRight, flipOutX
        transitionInOverlay: 'fadeIn',
        transitionOutOverlay: 'fadeOut',
        onFullscreen: function(){},
        onResize: function(){},
        onOpening: function(){},
        onOpened: function(){},
        onClosing: function(){},
        onClosed: function(){},
        afterRender: function(){}
    });

    $("#newAccount").click(function (e) { 
        e.preventDefault();
        $(".newAccount").show(500);
        $(".login").hide(500);
        $("#login").removeClass('active');
        $("#newAccount").addClass('active');
    });

    $("#login").click(function (e) {
        e.preventDefault();
        $(".newAccount").hide(500);
        $(".login").show(500);
        $("#login").addClass('active');
        $("#newAccount").removeClass('active');
    });

});
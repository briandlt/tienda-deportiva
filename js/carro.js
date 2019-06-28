// REMOVER PRODUCTO DEL CARRO DE COMPRAS //
$('.icon-delete').click(function (e) {
    e.preventDefault();
    var idDelete = $(this).children("input").val();
    var rowDelete = $(this).parents('#rowCar');
    $.ajax({
        type: "POST",
        // url: "url",
        data: {
            idDelete
        },
        // dataType: "dataType",
        success: function (response) {
            if (!response.error) {
                rowDelete.remove();
                updatePrices();
                if ($('#rowCar').length < 1) {
                    $(".carrito, .total, .titleCar").remove();
                    $('#contenidoCarro').append("<h1 class='emptyCar'>No hay articulos en el carro de compras</h1><div class='carroVacio'><img src='./imagenes/logos/carro-vacio.png' alt='carro de compras vacio'></div>");
                }
            } else {
                console.log('Error en la respuesta del servidor');
            }
        }
    });
});

// AGREGAR CANTIDAD DE UN PRODUCTO EN EL CARRO //
$('.icon-plus, .icon-minus').click(function (e) {
    e.preventDefault();
    var row = $(this).parents("#rowCar");
    var idUpdate = row.find('input').val();
    if ($(e.target).is(".icon-plus")) {
        var operacion = 'suma';
    } else if ($(e.target).is(".icon-minus")) {
        let cantidad = row.find('.cantidad').text();
        if (cantidad > 1) {
            var operacion = 'resta';
        } else {
            var operacion = 'null';
        }
    }
    $.ajax({
        type: "POST",
        data: {
            idUpdate,
            operacion
        },
        success: function (response) {
            if (!response.error) {
                // console.log(response);
                if (operacion == 'suma') {
                    let cantidad = parseInt(row.find('.cantidad').text()) + 1;
                    row.find('.cantidad').text(cantidad);
                } else if (operacion == 'resta') {
                    let cantidad = parseInt(row.find('.cantidad').text()) - 1;
                    row.find('.cantidad').text(cantidad);
                }
                updatePrices();
            } else {
                console.log('Error en la respuesta del servidor');
            }
        }
    });
});

// FUNCION PARA ACTUALIZAR SUBTOTAL Y TOTAL DEL CARRO DE COMPRAS //
var updatePrices = function () {
    var subtotal = 0;
    var total = 0;
    $(".precio").each(function () {
        let precio = parseFloat($(this).text().replace(',', ""));
        let cantidad = parseFloat($(this).parents('#rowCar').find('.cantidad').text().replace(',', ""));
        subtotal = precio * cantidad;
        total += subtotal;
        $(this).parents('#rowCar').find('.subtotal').text(subtotal.toLocaleString() + '.00 ');
    });
    $('.precioTotal').text('$' + total.toLocaleString() + '.00 ');
}
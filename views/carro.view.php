<?php require_once('templates/navbar.php'); ?>

<section id="contenidoCarro">
    <?php if(!empty($_SESSION['carro'])){ ?>
        <div>
            <h1 class="titleCar">Carro de compras</h1>
            <table class="carrito">
                <tr>
                    <th></th>
                    <th></th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                <?php
                    $total = 0;
                    $carrito = $_SESSION['carro'];
                    foreach($carrito as $carro): 
                ?>
                <tr id="rowCar">
                    <td id="idProdCar"><span class="icon-delete" title="Eliminar del carro"><input type="hidden" value="<?php echo $carro['idProducto']; ?>"></span></td>
                    <td><a href="detallesProducto/<?php echo $carro['idProducto']; ?>"><img src="imagenes/<?php echo $carro['imagen'] ?>" alt=""></a></td>
                    <td><a href="detallesProducto/<?php echo $carro['idProducto']; ?>"><?php echo ucwords($carro['producto']);?></a></td>
                    <td>$<span class="precio"><?php echo number_format($carro['precio'],2);?></span></td>
                    <td><span class="icon-minus resta"></span><span class="cantidad"><?php echo $carro['cantidad'];?></span><span class="icon-plus suma"></span></td>
                    <td>$<span class="subtotal"><?php echo number_format($carro['precio'] * $carro['cantidad'],2); ?></span></td>
                </tr>
                <?php
                    $subtotal = $carro['precio'] * $carro['cantidad'];
                    $total = $total + $subtotal;
                    endforeach;
                ?>
            </table>
        </div>
        <section class="total">
            <p>Total <br/><span class="precioTotal">$<?php echo number_format($total,2); ?></span> MXN</p>
        </section>
    <?php }else{ ?>
        <h1 class='emptyCar'>No hay articulos en el carro de compras</h1>
        <div class='carroVacio'>
            <img src='./imagenes/logos/carro-vacio.png' alt='carro de compras vacio'>
        </div>
    <?php } ?>
</section>

<?php require_once('templates/footer.php'); ?>
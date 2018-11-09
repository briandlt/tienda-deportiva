<?php require_once('templates/navbar.php'); ?>

<section id="contenido">
    <?php foreach($arrayProductos as $producto): ?>
    <div class="producto">
        <a href="detallesProducto/<?php echo $producto['idProducto']; ?>"><img src="<?php echo "imagenes/". $producto['imagen']; ?>" alt=""></a>
        <div class="infoProduct animated zoomIn">
            <a id="nameProduct" href="detallesProducto/<?php echo $producto['idProducto']; ?>"><?php echo ucwords($producto['producto']); ?></a>
            <a href="detallesProducto/<?php echo $producto['idProducto']; ?>">$<?php echo number_format($producto['precio'],2); ?> MXN</a>
            <a class="iconCart" href="carro/<?php echo $producto['idProducto']; ?>"><span class="icon-cart"></span></a>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<?php require_once('templates/footer.php'); ?>
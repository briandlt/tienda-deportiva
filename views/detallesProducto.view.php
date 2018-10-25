<?php require_once('templates/navbar.php'); ?>

<section id="contenido">
    <div class="detallesProd">
        <h2 class="nameProd"><?php echo ucwords($producto['producto']); ?></h2>
        <img src="<?php echo "imagenes/". $producto['imagen']; ?>" alt="">
        <div class="infoProducto">
            <p>Descripción: <?php echo ($producto['caracteristica1']); ?></p>
            <p id="nameProduct" href=""><?php echo ucwords($producto['producto']); ?></p>
            <p href="#">$<?php echo $producto['precio']; ?>.00 MXN</p>
            <a href=""><span class="icon-cart"></span></a>
        </div>
    </div>
</section>

<?php require_once('templates/footer.php'); ?>
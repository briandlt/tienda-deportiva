<?php require_once('templates/navbar.php'); ?>

<section id="contenido">
    <?php foreach($arrayProductos as $producto): ?>
    <div class="producto">
        <a href="#"><img src="<?php echo "imagenes/". $producto['imagen']; ?>" alt=""></a>
        <div class="infoProduct animated zoomIn">
            <a id="nameProduct" href=""><?php echo ucwords($producto['producto']); ?></a>
            <a href="#">$<?php echo $producto['precio']; ?>.00 MXN</a>
            <a class="iconCart" href=""><span class="icon-cart"></span></a>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<?php require_once('templates/footer.php'); ?>
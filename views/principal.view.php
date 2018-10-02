<?php require('templates/navbar.php'); ?>

<section id="productosPrincipal">
    <?php foreach($arrayProductos as $producto): ?>
    <div class="producto">
        <a href="#"><img src="<?php echo "imagenes/". $producto['imagen']; ?>" alt=""></a>
        <div class="infoProduct">
            <a id="nameProduct" href=""><?php echo ucwords($producto['producto']); ?></a>
            <a href="#">$<?php echo $producto['precio']; ?>.00 MXN</a>
            <a href=""><span class="icon-cart"></span></a>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<?php require('templates/footer.php'); ?>
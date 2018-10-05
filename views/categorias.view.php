<?php require('templates/navbar.php'); ?>

<section id="contenido">
    <h1><?php echo ucwords($arrayProductos[0]['categoria']); ?></h1>
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
    <div class="paginacion">
        <?php for($i=1; $i<=$numeroPaginas; $i++): ?>
            <a href="controllers/categorias.controller.php?categoria=<?php echo $producto['categoria']; ?>&pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
</section>

<?php require('templates/footer.php'); ?>
<?php require('templates/navbar.php'); ?>

<section id="contenido">
    <h1><?php echo ucwords($arrayProductos[0]['categoria']); ?></h1>
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
    <div class="paginacion">
        <?php for($i=1; $i<=$numeroPaginas; $i++): ?>
            <a href="categorias/<?php echo $producto['categoria']; ?>/<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
</section>

<?php require('templates/footer.php'); ?>
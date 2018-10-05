<?php require('templates/navbar.php'); ?>

<section id="contenido">
    <h1>Contacto</h1>
    <div class="contacto animated fadeInLeft">
        <form class="formContacto" action="" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="mapa">
        <iframe class="animated fadeInRight" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.190508254499!2d-103.314668185435!3d20.66182700557995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b3d34cad6f5b%3A0x414767fb37804e6!2sDr.+Salvador+Garc%C3%ADa+Diego+164%2C+San+Antonio%2C+44800+Guadalajara%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1538509561684" width="100%" height="450" frameborder="0" allowfullscreen></iframe>

        <div class="infoContacto animated fadeInUp">
            <p><b>Teléfono:</b> (33)3643-3211</p>
            <p><b>Celular:</b> 33-34-43-74-51</p>
            <p><b>Dirección:</b> Salvador Garcia Diego #164</p>
            <p><b>Correo:</b> brianesparzadlt4@gmail.com</p>
        </div>
    </div>
    <div class="infoContacto">
        
    </div>
</section>

<?php require('templates/footer.php'); ?>
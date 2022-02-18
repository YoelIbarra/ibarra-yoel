<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contacto</title>
</head>

    <?php include('header.php'); ?>

<body>
    <main>
        <h2>Formulario de Contacto</h2>
        <div class="contenedor contacto-contenedor contacto-form">
        <form action="enviar-contacto.php" method="POST">
            <fieldset>
                <div class="contacto-form-item">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Su Nombre" maxlength="50" required>
                </div>

                <div class="contacto-form-item">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Su Apellido" maxlength="50" required>
                </div>

            </fieldset>
            <fieldset>
                <div class="contacto-form-item">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Su email" maxlength="50" required>
                </div>
                <div class="contacto-form-item">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Su teléfono" maxlength="15" default="0">
                </div>
            </fieldset>

            <fieldset>
                <textarea name="mensaje" id="mensaje" cols="50" rows="10" maxlength="255" placeholder="Por favor, escriba aquí su mensaje" required></textarea>
            </fieldset>
            <div class="boton-contacto-posicion">
                <input class="boton-contacto-enviar"type="submit" value="Enviar">
            </div>
        </form>


            <h3><?php if(isset($_GET['m'])){ 
                if($_GET['mensaje'] = "ok"){
                echo "Mensaje enviado correctamente!!";
            } } ?></h3>

        </div>
    </main>
</body>

<?php include('footer.php') ?>

</html>
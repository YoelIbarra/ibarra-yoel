<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Comentarios</title>
</head>
<body>
    <?php include("header.php"); ?>

    <main>
        <h1>Sección de comentarios públicos</h1>

        <?php if(isset($_GET['m'])){
            if("ok" == $_GET['m']){
                echo "<h2>comentario insertado correctamente</h2>";
            }
        }?>
        
        <div class="contenedor contacto-contenedor contacto-form">
            <form action="insertar-comentario-pagina.php" method="POST">
                <fieldset>
                    <div class="item-comentario">
                        <label for="nombre" id="nombre" >Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Su Nombre o anónimo" maxlength="50" required>
                    </div>
                </fieldset>
                <fieldset>
                    <textarea name="comentariop" id="comentariop" cols="30" rows="10" placeholder="Inserte en esta sección un comentario sobre la página"></textarea>
                </fieldset>
                <div class="boton-contacto-posicion">
                    <input class="boton-contacto-enviar"type="submit" value="Enviar">
                </div>
            </form>

        </div>

        <div class="contenedor contacto-contenedor contacto-form">
            <form action="insertar-comentario-casa.php" method="POST">
                <fieldset>
                <div class="item-comentario">
                    <label for="nombre" id="nombre" >Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Su Nombre o anónimo" maxlength="50" required>
                 </div>
                </fieldset>
                <fieldset>
                    <textarea name="comentarioc" id="comentarioc" cols="30" rows="10" placeholder="Inserte en esta sección un comentario sobre la casa que quiera agregar"></textarea>
                </fieldset>
                <div class="boton-contacto-posicion">
                    <input class="boton-contacto-enviar"type="submit" value="Enviar">
                </div>

            </form>
        </div>
    </main>

    <section class="contenedor">
        <h2>Seleccione si quiere ver los comentarios</h2>
        <div class="boton-comentario">
            <a href="comentarios-pagina.php" target="_blank" class="boton boton-botoncomen">Pagina</a>
            <a href="comentarios-casa.php" target="_blank" class="boton boton-botoncomen">Casa</a>
        </div>

    </section>



    <?php include ("footer.php")?>
</body>
</html>
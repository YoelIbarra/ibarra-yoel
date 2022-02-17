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

    <?php 
        include('header.php');
        
        /*Traigo datos*/
        include ('base-datos.php');

        $query = "SELECT id, documento, nombre, apellido, mail, telefono, carrera, otro FROM inscripto where id = ".$_GET['id']."";
    
        $inscriptos = mysqli_query($conexion,$query);
    
        while($inscripto = $inscriptos->fetch_assoc()){
            $documento = $inscripto['documento'];
            $nombre = $inscripto['nombre'];
            $apellido = $inscripto['apellido'];
            $mail = $inscripto['mail'];
            $telefono = $inscripto['telefono'];
            $carrera = $inscripto['carrera'];
            $otro = $inscripto['otro'];
        }
        if(!$telefono){ $telefono = 0;}
        if(!$otro){ $otro = '';}
        
        mysqli_close($conexion); 
    ?>

<body>
    <main>
        <h2>Formulario de Inscripción</h2>
        <h3 class="contenedor alerta "><?php if(isset($_GET['m'])){ 
               
                $mensaje =  $_GET['m'];
                if($mensaje == "ok"){
                    echo "Usted se ha inscripto correctamente!!";
                }
                else if($mensaje == "dup"){
                    $dni = $_GET['dni'];
                    echo ' 
                                No se pudo inscribir porque su dni '.$dni.' ya fue anotado, <br> por favor contactese a traves de el boton "Contacto" 
                            ';
                }
            } ?>
        </h3>
        <div class="contenedor contacto-contenedor contacto-form">
        <form action="update-inscripcion.php" method="POST">
            <fieldset>
                <div class="contacto-form-item">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Su Nombre" maxlength="50" value=<?php echo "'".$nombre."'" ?>  required>
                </div>

                <div class="contacto-form-item">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Su Apellido" maxlength="50"value=<?php echo "'".$apellido."'" ?>  required>
                </div>
                <div class="contacto-form-item">
                    <label for="dni">DNI</label>
                    <input  id="dni" name="dni" placeholder="Su DNI" maxlength="8" value=<?php echo "'".$documento."'" ?> readonly="readonly">
                </div>
            </fieldset>
            <fieldset>
                <div class="contacto-form-item">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Su email" maxlength="50" value=<?php echo "'".$mail."'" ?> required>
                </div>
                <div class="contacto-form-item">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Su teléfono" maxlength="15" default="0" value=<?php echo "'".$telefono."'" ?> >
                </div>
            </fieldset>

            <fieldset>
                <textarea name="carrera" id="carrera" cols="50" rows="5" maxlength="255" placeholder="Por favor, escriba aquí que carrera estará estudiando" required><?php echo $carrera ?></textarea>
            </fieldset>
            <fieldset>
                <textarea name="mensaje" id="mensaje" cols="50" rows="10" maxlength="255" placeholder="Por favor, escriba aquí su mensaje" required> <?php echo $otro; ?> </textarea>
            </fieldset>
            <div class="boton-contacto-posicion">
                <input class="boton-contacto-enviar"type="submit" value="Enviar">
            </div>


        </form>




        </div>
    </main>
</body>

<?php include('footer.php') ?>

</html>
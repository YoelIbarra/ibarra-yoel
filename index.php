<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Inicio</title>
    </head>
<body>

    <?php include("header.php") ?>
    


    <main class="contenedor">
        <?php
            //Defino variables y constantes
            $TotalIntegrantes = 13;
            $CantHombres = 3;
            $CantMujeres = $TotalIntegrantes - $CantHombres;
            const EspacioHabitacionGrande = 3;
            const EspacioHabitacionChica = 2;
            $CantHabitacionGrande = 2;
            $CantHabitacionChica = 4;
        ?>
        <h2 class="titulo">Conociendo la historia de la Casa</h2>
		<div class="texto-contenedor">							  
        <p>La casa se cedió en el año 1998 a la Municipalidad de Carmen de Areco con la finalidad de crear una Residencia para los estudiantes universitarios que vengan a CABA. </p>
        <p>El municipio decidió entonces decidió que los indicados para manejar la misma era el grupo de estudiantes que iba a vivir y así se creo la primer comición </p>
		</div>	  
    </main>

    <div class="contenedor contenedor-inicio">
        
        <section class="">
            <h3>Integrantes</h3>
            <p>Actualmente viviendo en al residencia hay un total de <?php echo $TotalIntegrantes ?> personas</p>
            <p>Los cuales <?php echo $CantHombres ?> Son Hombres y <?php echo $CantMujeres ?> Mujeres</p>
        </section>

        <section>
            <h3>Habitaciones</h3>
            <p>Las habitaciones con las que contamos son unisex, actualmente estamos organizados con un total de</p>
            <ul>
                <li><?php echo $CantHabitacionGrande ?> habitaciones de <?php echo EspacioHabitacionGrande ?> personas</li>
                <li><?php echo $CantHabitacionChica ?> habitaciones de <?php echo EspacioHabitacionChica ?> personas</li>
            </ul>
        </section>
    </div>  

    <?php include("footer.php"); ?>
</body>
</html>
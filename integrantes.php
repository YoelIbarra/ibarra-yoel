<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
    <title>Integrantes</title>
</head>
<body>

    <?php include('header.php') ?>

    <div class="contenedor">
        <h2>Seccion de integrantes</h2>

        <div class="">
            <nav class="navegacion-integrante">
                <a href="integrantes.php?rol=0" class="boton-integrante">Presidente</a>
                <a href="integrantes.php?rol=1" class="boton-integrante">Tesorero</a>
                <a href="integrantes.php?rol=2" class="boton-integrante">Secretario</a>
            </nav>
        </div>
    </div>

        <?php 
            //Lleno variables para mostrar a las personas
            if(isset($_GET['rol'])){

                include('traer-datos-rol.php');

            }
        ?>

        <main class="contenedor">
        <h2 class="integrantes-media">
                <?php 
                    if(!isset($_GET['rol'])){
                        echo "Por favor, haga clic en un boton <br> para poder ver a la persona." ;
                    }
                     
                ?>  
                              
         </h2>
            <h2>
                <?php 
                    if(isset($_GET['rol'])){
                        echo $rol ;
                    } 
                ?>                
            </h2>
            <h3>
                <?php 
                    if(isset($_GET['rol'])){
                        echo "Nombre: " . $nombre;
                    }
                ?> 
            </h3>
            <h3>
                <?php 
                    if(isset($_GET['rol'])){
                        echo "Apellido: " . $apellido;
                    }
                ?> 
            </h3>
            <h3>
                <?php 
                    if(isset($_GET['rol'])){
                        echo "Carrera: " . $carrera;
                    }
                ?>
            </h4>
        </main>
        
     <?php 
     //Esto lo hago porque sino la página se me veía muy mal.. 
     if(!isset($_GET['rol'])){

        echo '<div class="absolute-footer">';
        include('footer.php');
        echo '</div>';

     }else{
     include('footer.php');} ?>       
    
</body>
</html>
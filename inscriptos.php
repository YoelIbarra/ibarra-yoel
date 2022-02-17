<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inscriptos</title>
</head>
<body>
    <?php 
        include("header.php"); 
        include("traer-inscriptos.php");
        if($inscriptos->num_rows == 0){
            echo "<h1>Aún no hay inscriptos</h1>";
            if(isset($_GET['b'])) 
                echo "<h2> Se a borrado el inscripto con id ".$_GET['b']."</h2>";
        }else{
    ?>
    
    <main class="contenedor">
        <h1>Inscriptos</h1>
        <?php if(isset($_GET['b'])) {?>
            <h2> Se a borrado el inscripto con id <?php echo $_GET['b']; ?> </h2> <?php } 
        ?>
        <table class="table">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Documento</td>
                <td>Mail</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>

            <?php 
                while($inscripto = $inscriptos->fetch_assoc()){
                    echo "
                        <tr>
                            <td>" . $inscripto['nombre'] . "</td>
                            <td>" . $inscripto['apellido'] . "</td>
                            <td>" . $inscripto['documento'] . "</td>
                            <td>" . $inscripto['mail'] . "</td>
                            <td>
                                BOTON MODIFICAR (".$inscripto['id'] . ")
                            </td>
                            <td>
                                <a href='eliminar-inscripto.php?id=".$inscripto['id']."' class='boton'>Eliminar</a>
                            </td>
                        </tr> 
                    ";
                }
            
            ?>
            
        </table>
    </main>
    
    
    







    <?php }
    if($inscriptos->num_rows <10){
        echo '<div class="absolute-footer">';
        include('footer.php');
        echo '</div>';        
    ?>
    <?php } else {
    include("footer.php"); }?>
</body>
</html>
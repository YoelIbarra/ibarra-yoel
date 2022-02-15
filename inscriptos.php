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
            echo "Aún no hay inscriptos";
        }else{
    ?>
    
    <main class="contenedor">
        <h1>Inscriptos</h1>
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
                            <td>BOTON MODIFICAR (".$inscripto['id'] . ")</td>
                            <td>BOTON MODIFICAAR (" . $inscripto['id'] . ")</td>
                        </tr> 
                    ";
                }
            
            ?>
            
        </table>
    </main>
    
    
    







    <?php }include("footer.php") ?>
</body>
</html>
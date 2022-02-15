<?php 
    
    include ('base-datos.php');

    $query = "SELECT id, documento, nombre, apellido, mail, telefono, carrera, otro FROM inscripto";

    $inscriptos = mysqli_query($conexion,$query);

    mysqli_close($conexion);



?>
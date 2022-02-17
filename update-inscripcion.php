<?php

    include('base-datos.php');

    /*Traigo Datos del Form*/

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    $mensaje = $_POST['mensaje'];

    
    $query1 = "SELECT id from inscripto where documento = $dni ; ";
    $inscriptos = mysqli_query($conexion,$query1);
    while($inscripto = $inscriptos->fetch_assoc()){
        $id = $inscripto['id'];
    }

    $query2 =   "UPDATE inscripto SET  
                    nombre = '$nombre',
                    apellido = '$apellido',
                    mail = '$email',
                    telefono = $telefono,
                    carrera = '$carrera',
                    otro = '$mensaje'
                WHERE id = $id ;
                    ";

    mysqli_query($conexion,$query2);
    
    header("location: inscriptos.php?m=ok&&id=".$id);
    mysqli_close($conexion)
?>
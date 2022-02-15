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

    /*Verificar que no exista el DNI*/
    $query1 = "SELECT * from inscripto where documento = $dni ; ";
    $inscriptos = mysqli_query($conexion,$query1);
    if($inscriptos->num_rows > 0){
        /*devolver que el dni ya se encuentra registrado*/
        mysqli_close($conexion);
        header("location: inscripcion.php?m=dup&&dni=".$dni);
    }else{

    $query2 = "INSERT INTO `inscripto` (`documento`, `nombre`, `apellido`, `mail`, `telefono`, `carrera`, `otro`) VALUES ('$dni','$nombre','$apellido','$email','$telefono','$carrera','$mensaje')";

    mysqli_query($conexion,$query2);
    mysqli_close($conexion);

    header("location: inscripcion.php?m=ok");
    }
?>
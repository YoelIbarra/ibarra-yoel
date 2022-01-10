<?php

    include('base-datos.php');

    $id_rol = $_GET['rol'];


    $query = "SELECT r.descripcion as descripcion,i.nombre as nombre,i.apellido as apellido,i.carrera as carrera FROM `integrantes` i INNER JOIN rol r on i.id_rol = r.id_rol WHERE i.id_rol = $id_rol";

    $resultado = mysqli_query($conexion, $query);


   if($resultado->num_rows > 0){
        $valores = $resultado->fetch_assoc();
        $nombre = $valores['nombre'];
        $apellido = $valores['apellido'];
        $carrera = $valores['carrera'];
        $rol = $valores['descripcion'];
    }
    mysqli_close($conexion);

    ?>
<?php

    include('base-datos.php');
    $id = $_GET['id'];


    $query = "DELETE FROM inscripto WHERE id = $id ";

    mysqli_query($conexion,$query);

    mysqli_close($conexion);

    header("location: inscriptos.php?b=" . $id);




?>
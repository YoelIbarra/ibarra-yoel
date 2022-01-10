
<?php
    include('base-datos.php');

    /* Traigo los parámetros del form */
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $queryEnviar = "call contactoInsertar ('$nombre','$apellido','$email','$telefono','$mensaje')";
    /* Envio el insert*/
    mysqli_query($conexion, $queryEnviar);
    mysqli_close($conexion);

    header("location: contacto.php?m=ok");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contacto</title>
</head>

<nav class="contacto-navegacion">
    <a href="">Me quiero inscribir por primera vez</a>
    <a href="">Ya me inscribí y quiero saber mi situación actual</a>
    <a href="">Quiero ayudar a la casa</a>
    <a href="">Otros</a>
</nav>

<form action="">
    <fieldset>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Su Nombre" maxlength="50" required>

        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Su Apellido" maxlength="50" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Su email" maxlength="50" required>

        <label for="dni">DNI</label>
        <input type="number" id="dni" name="dni" placeholder="Su DNI" maxlength="8" required>

    </fieldset>
    <fieldset>
        <input type="textarea" placeholder="">
    </fieldset>

    <input type="submit" value="Enviar">
</form>

</html>
<?php
$fechahora = date('m-d-Y h:i:s a', time());  
$subtitulo = "<h3>La fecha y hora del comentario es ".$fechahora ."</h2>";


$titulo = "<h1>La persona que lo escribio: ".$_POST['nombre']."</h1>";

$comentario = "<h5>".$_POST['comentariop']."</h5>";

$archivo = fopen('txts/comentarios-pagina.txt','a');
fputs($archivo, $titulo);
fputs($archivo, $subtitulo);
fputs($archivo, $comentario);

fclose($archivo);

header("location: comentarios.php?m=ok");
?>

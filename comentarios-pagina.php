<?php 
    $archivo = fopen('txts/comentarios-pagina.txt','r');

    $texto = fread($archivo, filesize('txts/comentarios-pagina.txt'));

    echo $texto;
?>
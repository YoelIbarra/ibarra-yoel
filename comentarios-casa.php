<?php 
    $archivo = fopen('txts/comentarios-casa.txt','r');

    $texto = fread($archivo, filesize('txts/comentarios-casa.txt'));

    echo $texto;
?>
<?php

    $nombre=$_GET['nombre'];
    $edad=$_GET['edad'];

    //para ver todo lo que nos envia el metodo GET
    var_dump($_GET);

    //imprimir en la web
    echo '<h1>'.$nombre.'</h1>';
    echo '<h1>'.$edad.'</h1>';


?>
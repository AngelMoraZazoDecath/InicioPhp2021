<?php

    
    /*
    //CONDICIONALES
        if(condicion){
            code;
        }else{
            code;
        }

    //OPERACIONES DE CONDICIONES
        == igual
        === identico
        != diferente
        <> diferente
        !== no identico
        < menor que
        > mayor que
        <= menor o igual que
        >= mayor o igual que

    */

    //EXAMPLES

    $color='rojo';
    if($color=='rojo'){

        echo '<h1>' . 'El color es rojo' . '</h1>';

    }else{

        echo '<h1>' . 'El color NO es rojo' . '</h1>';
    }

    //SALTO LINEAd
    echo '<br>';

    $year=2019;
    if($year == 2019){
        echo '<h1>' . 'El año es igual a 2019' . '</h1>';

    }else{

        echo '<h1>' . 'El año NO es igual a 2019' . '</h1>';
    }

    if($year < 2019){
        echo '<h1>' . 'El año es menor a 2019' . '</h1>';

    }else{

        echo '<h1>' . 'El año mayor a 2019' . '</h1>';
    }
    




?>
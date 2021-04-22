<?php

    //operadores aritmeticos

    $num1=22;
    $num2=11;

    echo '<h1>' .($num1 + $num2).'</h1>';
    echo '<h1>' .($num1 - $num2).'</h1>';
    echo '<h1>' .($num1 * $num2).'</h1>';
    echo '<h1>' .($num1 / $num2).'</h1>';
    echo '<h1>' .($num1 % $num2).'</h1>';

    //operadores incremento y decremento

    $year=2019;
    $year++; //aqui valdra 2020
    $year--; //aqui valdra 2019

    echo '<h1>' . ++$year .'</h1>'; //aqui imprime 2020 porque suma 1
    echo '<h1>' . --$year .'</h1>'; //aqui imprime 2019 porque resta 1

    //operadores de asignacion
    $edad=55;

    echo '<h1>'. $edad . '</h1>';
    echo '<h1>'. ($edad+=5) . '</h1>'; //$edad=$edad + 5;
     



?>
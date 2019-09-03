<?php

/**
 * 
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

 $contadorMaior = 999;
 $contadorMenor = 100;
 $resultado = 0;
 while ($contadorMaior > 99) {

    $contadorMenor = 100;
    while ($contadorMenor < 1000) {
        $produto = 0;
        $produto = $contadorMaior * $contadorMenor;

        $primeiraParte = substr($produto,0, 3);
        $segundaParte = substr($produto, -3);

        #var_dump($primeiraParte[1]);
        #var_dump($segundaParte[1]);
        #var_dump((intval($primeiraParte[1]) - intval($segundaParte[1])) == 0);
        #var_dump($produto);

        #var_dump(strlen($produto) );
        #var_dump($contadorMaior );
        #var_dump($contadorMenor );

        /*var_dump($primeiraParte[0]);
        print_r($produto);
        var_dump($primeiraParte[1]);
        var_dump(intval($segundaParte[1]));
        var_dump(intval($primeiraParte[1]) - intval($segundaParte[1]) == 0);
        exit;*/

        /*var_dump((intval($primeiraParte[0]) - intval($segundaParte[2])) == 0);
        var_dump((intval($primeiraParte[1]) - intval($segundaParte[1])) == 0);
        var_dump((intval($primeiraParte[2]) - intval($segundaParte[0])) == 0);
        var_dump($produto);
        var_dump('################################################################');*/


        if ($produto > $resultado  && strlen($produto) == 6 &&
            (intval($primeiraParte[0]) - intval($segundaParte[2])) == 0 &&
            (intval($primeiraParte[1]) - intval($segundaParte[1])) == 0 &&
            (intval($primeiraParte[2]) - intval($segundaParte[0])) == 0
        ) {
            var_dump($produto);
            $resultado = $produto;
        }

        $contadorMenor = $contadorMenor + 1;
    }

    
    $contadorMaior = $contadorMaior - 1;
 }

 echo 'Resultado: ' . $resultado;
<?php

/**
 * Special Pythagorean triplet
 * 
 * Problem 9
 * 
 *A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 *
 *    a2 + b2 = c2
 *    For example, 32 + 42 = 9 + 16 = 25 = 52.
 *
 *There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 *Find the product abc.   
 */

$resultado = 0;
 for ($a = 1; $a < 1000; $a++) { 
     for ($b = $a + 1; $b <= 1000; $b++) { 
         #for ($c = $b + 1; $c <= 1000; $c++) { 
             
        $c = pow($a, 2) + pow($b, 2);
        $soma = pow($a, 2) + pow($b, 2) + pow($c, 2);

        if ($c < 1000) {
            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump('################################################################');
        }
        

        if ($soma == 1000) {
            $resultado = $soma;
        }
         #}
     }
 }

 echo 'Resultado: ' . $resultado;
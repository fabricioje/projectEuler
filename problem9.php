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

$s = 1000;
$resultado = 0;
 for ($a = 1; $a < $s / 3; $a++) { 
     for ($b = $a; $b < $s / 2; $b++) { 
        $c = $s - $a - $b;

        if (pow($a, 2) + pow($b, 2) == pow($c, 2)) {
            $resultado = $a * $b * $c;
        }
     }
 }

 echo 'Resultado: ' . $resultado;
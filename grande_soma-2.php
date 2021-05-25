<?php

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar) {
    // Write your code here
    
    $resultado=0;
    
    for ($contador = 0; $contador <= count($ar); $contador++) {
    
        $resultado = $resultado + $ar[$contador];
    
}

    
    return $resultado; 
}

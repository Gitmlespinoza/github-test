<?php 

//continue - resetea el bucle a la siguiente iteración

$letters = [ 'A', 'B', 'C' ];
foreach ( $letters as $letter) {
    if( 'A' == $letter ) {
        continue; //"resetea" la ejecución en la siguiente vuelta
        echo 'Esto nunca se imprimirá';
    }
    echo $letter;
}

//break - detiene el bucle entero 

$letters = [ 'A', 'B', 'C' ];
foreach ( $letters as $letter) {
    if( 'A' == $letter ) {
        break; //para el bucle entero y no se imprime nada
        echo 'Esto nunca se imprimirá';
    }
    echo $letter;
}

?>
<?php

// Ejercicio 3: Cree un programa que identifique si un número es primo o no.

// Recibir el número enviado por POST
$numero = $_POST['numero'];
$esPrimo = true;

// Funcion para verificar si un número es primo
function numeroPrimo($numero){
    $contador = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $contador++;
        }
    }

    if($contador == 2){
        return true; // El número es primo
    } else{
        return false; // El número no es primo
    }
    return $esPrimo;
}

// Imprimir el resultado de la función
if(numeroPrimo($numero) == false){
    echo "El número: $numero no es primo";
} else{
    echo "El número: $numero es primo";
}

?>
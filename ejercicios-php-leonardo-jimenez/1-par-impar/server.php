<?php

// Ejercicio 1: Crear un programa que reciba un número y diga si es par o impar.

// Recibe el número enviado por POST
$numero = $_POST['numero'];

// Verifica si el número es par o impar
if($numero % 2 == 0){
    echo "El número es par";
} else{
    echo "El número es impar";
}

?>
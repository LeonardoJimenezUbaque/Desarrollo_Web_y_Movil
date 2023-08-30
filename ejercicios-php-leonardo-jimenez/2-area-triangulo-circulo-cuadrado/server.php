<?php

// Ejercicio 2: Crear un programa que halle er área de un triángulo, un círculo y un cuadrado (solicitar datos por formulario).

// Datos triangulo
$base = $_POST['baseTriangulo'];
$altura = $_POST['alturaTriangulo'];

// Datos circulo
$radio = $_POST['radioCirculo'];

// Datos cuadrado
$lado = $_POST['ladoCuadrado'];

// Hallar las areas
$areaTriangulo = ($base * $altura) / 2;
$areaCirculo = 3.1416 * ($radio * $radio);
$areaCuadrado = $lado * $lado;

// Imprimir resultados
echo "El área del triángulo es: " . $areaTriangulo . "<br>";
echo "El área del círculo es: " . $areaCirculo . "<br>";
echo "El área del cuadrado es: " . $areaCuadrado . "<br>";

?>


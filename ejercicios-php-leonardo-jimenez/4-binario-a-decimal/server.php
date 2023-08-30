<?php

// Ejercicio 4: Cree un programa que convierta un numero binario a un numero decimal

// Recibir el número enviado por POST
$numeroBinario = $_POST['numero1'].$_POST['numero2'].$_POST['numero3'].$_POST['numero4'];

// Transformar el número binario a decimal
$numerDecimal = bindec($numeroBinario);

// Imprimir resultados
echo "El número binario es: ".$numeroBinario."<br>";
echo "El número decimal es: ".$numerDecimal."<br>";

?>
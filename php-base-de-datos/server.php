<?php

// Base de datos
include 'conexionBD.php';

// Datos del formulario usuarios
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$password = $_POST['password'];

// Datos del formulario juegos
$idjuegos = $_POST['idjuegos'];
$nombrejuegos = $_POST['nombrejuegos'];
$categoria = $_POST['categoria'];
$plataforma = $_POST['plataforma'];

// Insertar datos usuarios
$sqlusuarios = "INSERT INTO registrousuarios (id, nombre, apellido, edad, correo, password)
VALUES ('$id', '$nombre', '$apellido', '$edad', '$correo', '$password')";

// // Insertar datos juegos
// $sqljuegos = "INSERT INTO juegos (idjuegos, nombrejuegos, categoria, platforma)
// VALUES ('$idjuegos', '$nombrejuegos', '$categoria', '$plataforma')";

// Chequear conexion usuarios
if (mysqli_query($conn, $sqlusuarios)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqlusuarios . "<br>" . mysqli_error($conn);
}

// // Chequear conexion juegos
// if (mysqli_query($conn, $sqljuegos)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sqljuegos . "<br>" . mysqli_error($conn);
// }

// Cerrar conexion
$conn->close();
?>
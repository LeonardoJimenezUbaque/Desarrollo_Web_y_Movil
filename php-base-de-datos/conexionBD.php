<?php
// Conectando, seleccionando la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Creando la conexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Chequeando la conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "INSERT INTO registrousuarios (id, nombre, apellido, edad, correo, login, password)
// VALUES ('John', 'Doe', 'john@example.com')";

// // if (mysqli_query($conn, $sql)) {
// //     echo "New record created successfully";
// // } else {
// //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// // }

// // mysqli_close($conn);
?>
<?php

// Base de datos
include 'conexionBD.php';

// Datos del formulario usuarios
$id = $_POST['id'];
$nuevoId = $_POST['nuevoId'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$password = $_POST['password'];

// Recibe el metodo que se quiere usar en la base de datos
$opciones = $_POST['opciones'];

// Menu de opciones de manejo de datos en la base de datos
switch ($opciones) {
    case 'insert': {
        // Insertar datos usuarios
        $sqlusuarios = "INSERT INTO registro_usuarios (id, nombre, apellido, edad, correo, password)
        VALUES ('$id', '$nombre', '$apellido', '$edad', '$correo', '$password')";
        break;
    }
    case 'select': {
        // Seleccionar datos usuarios
        $sqlusuarios = "SELECT * FROM registro_usuarios WHERE id = '$id'";
        $resultado = mysqli_query($conn, $sqlusuarios);

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Apellido: " . $fila["apellido"] . "<br>";
            echo "Edad: " . $fila["edad"] . "<br>";
            echo "Correo: " . $fila["correo"] . "<br>";
            echo "Password: " . $fila["password"] . "<br>";
        }
        break;
    }
    case 'update': {
        // Actualizar datos usuarios
        $sqlusuarios = "UPDATE registro_usuarios
        SET nombre = '$nombre', apellido = '$apellido', edad = '$edad', correo = '$correo', password = '$password'
        WHERE id = '$id'";
        break;
    }
    case 'delete': {
        // Eliminar datos usuarios
        $sqlusuarios = "DELETE FROM registro_usuarios
        WHERE id = '$id'";
        break;
    }
}

// Chequear conexion usuarios
if (mysqli_query($conn, $sqlusuarios)) {
    echo "Todo correcto";
} else {
    echo "Error: " . $sqlusuarios . "<br>" . mysqli_error($conn);
}

// Cerrar conexion
$conn->close();
?>
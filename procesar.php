<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $fecha = $_POST["fecha"];

    // Conectar a la base de datos (ajusta la configuración según tu entorno)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "base";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar el producto en la base de datos
    $sql = "INSERT INTO productos (producto, cantidad, precio, fecha) VALUES ('$producto', $cantidad, $precio, '$fecha')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirige a la página principal
    } else {
        echo "Error al agregar el producto: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
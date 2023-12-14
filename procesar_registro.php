<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $dni = $_POST["dni"];

    if (empty($nombre) || empty($email) || empty($contrasena) || empty($dni)) {
        echo "Todos los campos son obligatorios. Por favor, completa el formulario.";
    } else {
        $api_key = '0888a3ebaf53e25c416400dc482528cf4bf4a08b0f91bbb18b05e2431844711a';
        $api_url = "https://apiperu.dev/api/dni/$dni";
        $options = [
            "http" => [
                "header" => "Authorization: Bearer $api_key"
            ]
        ];
        $context = stream_context_create($options);
        $api_response = file_get_contents($api_url, false, $context);
        $api_data = json_decode($api_response, true);

        if ($api_data && isset($api_data["data"])) {
            $data = $api_data["data"];
            $nombre_real = $data["nombres"] . " " . $data["apellido_paterno"] . " " . $data["apellido_materno"];
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "base";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            $checkDuplicateQuery = "SELECT * FROM usuarios WHERE email = '$email' OR nombre = '$nombre'";
            $duplicateResult = mysqli_query($conn, $checkDuplicateQuery);

            if (mysqli_num_rows($duplicateResult) > 0) {
                echo "<script>alert('El correo o nombre ya existe en la base de datos. Por favor, elige otro.');</script>";
                echo "<script>setTimeout(function(){window.location.href='Registro.html';}, 500);</script>";
            } else {
                $insertQuery = "INSERT INTO usuarios (nombre, nombre_real, email, contrasena, dni) VALUES ('$nombre', '$nombre_real', '$email', '$contrasena', '$dni')";
                if (mysqli_query($conn, $insertQuery)) {
                    echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.');</script>";
                    echo "<script>setTimeout(function(){window.location.href='index.php';}, 500);</script>";
                } else {
                    echo "<script>alert('Error en el registro. Inténtalo de nuevo.');</script>";
                    echo "<script>setTimeout(function(){window.location.href='Registro.html';}, 500);</script>";
                }
            }

            mysqli_close($conn);
        } else {
            echo "<script>alert('Error en el registro. Inténtalo de nuevo.');</script>";
            echo "<script>setTimeout(function(){window.location.href='Registro.html';}, 500);</script>";
        }
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $dni = $_POST["dni"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $estadoCivil = $_POST["estadoCivil"];
    $tipoMensaje = $_POST["tipo_mensaje"];
    $asunto = $_POST["asunto"];
    $cuerpoMensaje = $_POST["mensaje"];

    if (empty($nombres) || empty($apellidos) || empty($dni) || empty($correo) || empty($celular) || empty($estadoCivil) || empty($tipoMensaje) || empty($asunto) || empty($cuerpoMensaje)) {
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

            $insertQuery = "INSERT INTO consultas (nombres, apellidos, dni, correo, celular, estado_civil, tipo_mensaje, asunto, cuerpo_mensaje, nombre_real) VALUES ('$nombres', '$apellidos', '$dni', '$correo', '$celular', '$estadoCivil', '$tipoMensaje', '$asunto', '$cuerpoMensaje', '$nombre_real')";
            
            if (mysqli_query($conn, $insertQuery)) {
                echo "<script>alert('Registro exitoso.');</script>";
                echo "<script>setTimeout(function(){window.location.href='index.php';}, 500);</script>";
            } else {
                echo "<script>alert('Error en el registro. Inténtalo de nuevo.');</script>";
                echo "<script>setTimeout(function(){window.location.href='index.php';}, 500);</script>";
            }

            mysqli_close($conn);
        } else {
            echo "<script>alert('No se pudo obtener información válida del DNI a través de la API de apiperu.dev.');</script>";
            echo "<script>setTimeout(function(){window.location.href='index.php';}, 500);</script>";
        }
    }
}
?>
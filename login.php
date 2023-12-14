<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    if (empty($email) || empty($contrasena)) {
        echo "Ambos campos son obligatorios. Por favor, completa el formulario.";
    } else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "base";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena'";

        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $email;
            $_SESSION['nombreUsuario'] = $row['nombre'];

            $_SESSION['nombre_real'] = $row['nombre_real'];
            
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Credenciales incorrectas. Por favor, verifica tu email y contraseña.');</script>";
            echo "<script>setTimeout(function(){window.location.href='login.html';}, 500);</script>";        }

        mysqli_close($conn);
    }
}
?>
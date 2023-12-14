<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Tabla de Productos</h1>

<input type="text" id="filtroNombre" onkeyup="filtrarTabla()" placeholder="Filtrar por nombre...">
<input type="text" id="filtroPrecio" onkeyup="filtrarTabla()" placeholder="Filtrar por precio...">

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "base";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para obtener productos
            $sql = "SELECT producto, cantidad, precio FROM productos";
            $result = $conn->query($sql);

            // Mostrar productos en la tabla
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['producto']}</td>
                            <td>{$row['cantidad']}</td>
                            <td>{$row['precio']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay productos</td></tr>";
            }
            // Cerrar la conexión
            $conn->close();
        ?>
    </tbody>
</table>

<script>
    function filtrarTabla() {
        var filtroNombre, filtroPrecio, table, tr, tdNombre, tdPrecio, i, txtValueNombre, txtValuePrecio;
        filtroNombre = document.getElementById("filtroNombre").value.toUpperCase();
        filtroPrecio = document.getElementById("filtroPrecio").value.toUpperCase();
        table = document.querySelector("table");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) { 
            tdNombre = tr[i].getElementsByTagName("td")[0]; 
            tdPrecio = tr[i].getElementsByTagName("td")[2];
            if (tdNombre && tdPrecio) {
                txtValueNombre = tdNombre.textContent || tdNombre.innerText;
                txtValuePrecio = tdPrecio.textContent || tdPrecio.innerText;
                if (txtValueNombre.toUpperCase().indexOf(filtroNombre) > -1 && txtValuePrecio.toUpperCase().indexOf(filtroPrecio) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>
</html>
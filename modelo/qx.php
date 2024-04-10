<?php
$conexion = mysqli_connect('localhost','root','','xenco');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
// Paso 2: Operaciones 
$sql_select = "SELECT * FROM tb_datos_qx";
$resultado = $conexion->query($sql_select);

// Paso 3: Integrar en la página HTML
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MySQL</title>
</head>
<body>
    <h2>Tabla de datos de cirugía</h2>
    <table>
        <thead>
            <tr>
                <th>Quirofano</th>
                <th>Profesional</th>
                <th>Paciente</th>
                <!-- Agrega las otras columnas -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Mostrar datos en la tabla
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["quirofano"] . "</td>";
                    echo "<td>" . $fila["profesional"] . "</td>";
                    echo "<td>" . $fila["paciente"] . "</td>";
                    // Agrega las otras columnas
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay registros en la tabla</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Insertar nuevo registro</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="quirofano">Quirofano:</label>
        <input type="text" id="quirofano" name="quirofano" required><br>
        <label for="profesional">Profesional:</label>
        <input type="text" id="profesional" name="profesional" required><br>
        <label for="paciente">Paciente:</label>
        <input type="text" id="paciente" name="paciente" required><br>
        <!-- Agrega los otros campos -->
        <input type="submit" name="submit" value="Insertar">
    </form>
</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>

<?php
// Conectar a la base de datos
$database = new Database();
$conn = $database->getConnection();

// Verificar conexión
if ($conn) {
    echo "<h2>¡Conexión a la base de datos exitosa!</h2>";
} else {
    echo "<h2>Error al conectar con la base de datos.</h2>";
}
?>
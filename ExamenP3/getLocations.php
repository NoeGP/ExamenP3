<?php
header('Content-Type: application/json');
$servername = "ba0pecttwocifsyryd4m-mysql.services.clever-cloud.com";
$username = "uvlenx1awvdur1wk";
$password = "dsh4rUBseIkNcEqO16oC";
$dbname = "ba0pecttwocifsyryd4m";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    echo "<html><h1>Conexión fallida: " . $conn->connect_error . "</h1></html>";
} else {
    echo "<html><h1>Conexión exitosa</h1></html>";
}
$sql = "SELECT * FROM Lugares";
$result = $conn->query($sql);

$locations = array();

if ($result->num_rows > 0) {
    // Salida de cada fila
    while($row = $result->fetch_assoc()) {
        $locations[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

echo json_encode($locations);

?>


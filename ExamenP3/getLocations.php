<?php
header('Content-Type: application/json');
$servername = "byofggcnz2y0q6v0sheh-mysql.services.clever-cloud.com";
$username = "uvlenx1awvdur1wk";
$password = "Y7259IuGNdVd78KvCgLc";
$dbname = "ba0pecttwocifsyryd4m";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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


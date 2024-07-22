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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Prueba de PHP</title>
</head>

<body>
    <div id="una capa">
        <h1>Hola mundo!</h1>
        <p>Este es un ejemplo del uso de HTML para crear un documento web que nuestro navegador es capaz de interpretar.
        </p>
    </div>
    <h1>Datos de la base de datos</h1>
    <div id="result"></div>
</body>

</html>

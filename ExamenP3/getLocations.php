<?php
$servername = "ba0pecttwocifsyryd4m-mysql.services.clever-cloud.com";
$username = "uvlenx1awvdur1wk";
$password = "dsh4rUBseIkNcEqO16oC";
$dbname = "ba0pecttwocifsyryd4m";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT `Biblioteca`,`BloqueA`,`BloqueB`,`Laboratorio` FROM Lugares;";
$result = $conn->query($sql);

$locations = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $locations[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($locations);
?>

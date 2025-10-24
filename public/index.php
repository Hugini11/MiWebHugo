<?php
$servername = "db";
$username = "user";
$password = "password";
$database = "demo";

echo "<h2>Prova de connexió a la Base de Dades MySQL</h2>";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("<p style='color:red;'> Error de connexió: " . $conn->connect_error . "</p>");
} else {
    echo "<p style='color:green;'> Connexió establerta correctament!</p>";
}

$result = $conn->query("SHOW DATABASES;");
if ($result) {
    echo "<h3>Llista de bases de dades:</h3><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['Database']) . "</li>";
    }
    echo "</ul>";
    $result->free();
}

$conn->close();?>
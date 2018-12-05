<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olimp_baze";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Не удалось подключиться: " . $conn->connect_error);
}
?>
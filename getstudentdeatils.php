<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webproject";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM student";
$result = $conn->query($query);
echo '<pre>'."1";
var_dump($result);
echo '</pre>';


$students = array();


if ($result) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

$conn->close();
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'checkmate');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, sub, totalhours FROM subjects";
$result = $conn->query($sql);

$subjects = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $subjects[] = $row;
    }
}

$conn->close();
echo json_encode($subjects);
?>

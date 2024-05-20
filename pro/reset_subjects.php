<?php
$conn = new mysqli('localhost', 'root', '', 'checkmate');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "TRUNCATE TABLE subjects";
$success = $conn->query($sql);

$conn->close();
echo json_encode(['success' => $success]);
?>

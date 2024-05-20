<?php
$subject_id = $_GET['subject_id'];

$conn = new mysqli('localhost', 'root', '', 'checkmate');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sub FROM subjects WHERE id = $subject_id";
$result = $conn->query($sql);
$subject = $result->fetch_assoc();

$sql = "SELECT COUNT(*) as totalCount, 
               SUM(CASE WHEN status = 'present' THEN 1 ELSE 0 END) as presentCount 
        FROM attendance 
        WHERE subject_id = $subject_id";
$result = $conn->query($sql);
$attendance = $result->fetch_assoc();

$conn->close();

echo json_encode(['subject' => $subject, 'attendance' => $attendance]);
?>

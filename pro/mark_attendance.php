<?php
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['subject_id']) && isset($data['status'])) {
    $subject_id = $data['subject_id'];
    $status = $data['status'];

    $conn = new mysqli('localhost', 'root', '', 'checkmate');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO attendance (subject_id, status) VALUES (?, ?)");
    $stmt->bind_param("is", $subject_id, $status);
    $success = $stmt->execute();
    $stmt->close();
    $conn->close();

    echo json_encode(['success' => $success]);
} else {
    echo json_encode(['success' => false]);
}
?>

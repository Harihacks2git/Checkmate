<?php
session_start();
if (!isset($_SESSION['roll_no'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject_id = $_POST['subject_id'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];

    $conn = new mysqli('localhost', 'root', '', 'checkmate');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO attendance (subject_id, date, hours) VALUES ($subject_id, '$date', $hours)";

    if ($conn->query($sql) === TRUE) {
        header("Location: attendance.php?subject_id=$subject_id");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    // Store data in session to use in password setting page
    session_start();
    $_SESSION['roll_no'] = $roll_no;
    $_SESSION['name'] = $name;
    $_SESSION['phone_no'] = $phone_no;
    $_SESSION['email'] = $email;
    $_SESSION['department'] = $department;
    $_SESSION['semester'] = $semester;

    header("Location: password.php");
    exit();
}
?>
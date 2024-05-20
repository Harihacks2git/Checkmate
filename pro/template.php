<?php
session_start();
if (!isset($_SESSION['roll_no'])) {
    header("Location: index.php");
    exit();
}

$subject_id = $_GET['subject_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <style>
        /* Your existing CSS styles */
    </style>
</head>
<body>
    <div class="high">
        <div class="mainpage">
            <button class="menu-button" onclick="navigateToMainPage()">⋮</button>
            <h1 class="heading">Attendance</h1>
            <h2 class="subject" id="subjectName"></h2>
            <div class="button-op">
                <div class="att-but">
                    <button type="button" class="attend-button" onclick="markAttendance('present')">Present</button>
                    <button type="button" class="attend-button" onclick="markAttendance('absent')">Absent</button>
                    <button type="button" class="attend-button" onclick="markAttendance('holiday')">Holiday</button>
                </div>
            </div>
            <h1>Attendance:</h1>
            <p id="attendanceCount">0</p>
            <h1>Total classes conducted:</h1>
            <p id="totalCount">0</p>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetchAttendance();
        });

        function fetchAttendance() {
            fetch(`get_attendance.php?subject_id=${<?php echo $subject_id; ?>}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('subjectName').textContent = data.subject.sub;
                    document.getElementById('attendanceCount').textContent = data.attendance.presentCount;
                    document.getElementById('totalCount').textContent = data.attendance.totalCount;
                });
        }

        function markAttendance(status) {
            fetch('mark_attendance.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ subject_id: <?php echo $subject_id; ?>, status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    fetchAttendance();
                } else {
                    alert("Error marking attendance");
                }
            });
        }

        function navigateToMainPage() {
            window.location.href = 'mainpage.php';
        }
    </script>
</body>
</html>

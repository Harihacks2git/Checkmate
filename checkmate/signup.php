<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <script>
        function validateSignupForm() {
            var rollNo = document.getElementById('roll_no').value;
            var name = document.getElementById('name').value;
            var phoneNo = document.getElementById('phone_no').value;
            var email = document.getElementById('email').value;
            var department = document.getElementById('department').value;
            var semester = document.getElementById('semester').value;
            var rollNoPattern = /^20\d{8}$/;
            var phonePattern = /^\d{10}$/;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (!rollNoPattern.test(rollNo)) {
                alert("Roll number must start with '20' and be 10 digits long.");
                return false;
            }
            if (!name.trim()) {
                alert("Name is required.");
                return false;
            }
            if (!phonePattern.test(phoneNo)) {
                alert("Phone number must be 10 digits long.");
                return false;
            }
            if (!emailPattern.test(email)) {
                alert("Invalid email address.");
                return false;
            }
            if (!department) {
                alert("Department is required.");
                return false;
            }
            if (semester < 1 || semester > 8) {
                alert("Semester must be between 1 and 8.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h2>Signup</h2>
    <form action="signup_process.php" method="post" onsubmit="return validateSignupForm()">
        Roll No: <input type="text" id="roll_no" name="roll_no"><br>
        Name: <input type="text" id="name" name="name"><br>
        Phone No: <input type="text" id="phone_no" name="phone_no"><br>
        Email: <input type="text" id="email" name="email"><br>
        Department: 
        <select id="department" name="department">
            <option value="">Select Department</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Electronics Engineering">Electronics Engineering</option>
        </select><br>
        Semester: 
        <select id="semester" name="semester">
            <option value="">Select Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        .main {
            height: 400px;
            width: 300px;
            border-radius: 10px;
            background-color: transparent;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
        }
        .high {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100vw;
            background-image: url('gradient.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        form input {
            margin-bottom: 10px;
            padding: 6px;
            border-radius: 10px;
            background-color: grey;
            opacity: 0.2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(100% - 16px); /* Adjust width to fit padding */
        }
        form select{
            margin-bottom: 10px;
            padding: 6px;
            border-radius: 10px;
            background-color: grey;
            opacity: 0.7;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(100% - 16px); /* Adjust width to fit padding */

        }
        form input[type="submit"] {
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 10px;
        }

        .form-css{
          display: flex;
          flex-direction: column;
          overflow: scroll;
        }
        .signup-button{
            padding: 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            background-color:rgba(0, 0, 0, 0.562);
            color: white;
            font-size: 1em;
            transition: background-color 0.3s ease;
            opacity: 1.0;

        }

        button:hover {
            background-color: grey;
        }
    </style>
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
    <div class="high">
        <div class="main">
                <h2 style=" font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">SIGNUP</h2>
                <form action="signup_process.php" class="form-css" method="post" onsubmit="return validateSignupForm()">
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
                    <input type="submit" class="signup-button" value="Next">
                </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script>
        function validateLoginForm() {
            var rollNo = document.getElementById('roll_no').value;
            var password = document.getElementById('password').value;
            if (!rollNo.trim()) {
                alert("Roll number is required.");
                return false;
            }
            if (!password.trim()) {
                alert("Password is required.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post" onsubmit="return validateLoginForm()">
        Roll No: <input type="text" id="roll_no" name="roll_no"><br>
        Password: <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
        <button type="button" onclick="location.href='signup.php'">Signup</button>
    </form>
</body>
</html>

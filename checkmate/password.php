<!DOCTYPE html>
<html>
<head>
    <title>Set Password</title>
    <script>
        function validatePasswordForm() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm_password').value;
            var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;

            if (!passwordPattern.test(password)) {
                alert("Password must be at least 6 characters long, contain at least one uppercase letter, one lowercase letter, and one number.");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</head>
<body>
    <h2>Set Password</h2>
    <form action="set_password.php" method="post" onsubmit="return validatePasswordForm()">
        Password: <input type="password" id="password" name="password">
        <button type="button" onclick="togglePasswordVisibility()">Show</button><br>
        Confirm Password: <input type="password" id="confirm_password" name="confirm_password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

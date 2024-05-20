<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f4f8; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); padding: 40px; width: 300px; text-align: center; }
        h2 { margin-top: 0; color: #333; }
        label { display: block; margin-bottom: 10px; text-align: left; color: #333; font-weight: bold; }
        input[type="text"], input[type="password"] { width: calc(100% - 22px); padding: 10px; margin-bottom: 20px; border-radius: 6px; border: 1px solid #ccc; }
        button { padding: 10px; border: none; border-radius: 25px; cursor: pointer; background-color:rgba(0, 0, 0, 0.562); color: white; font-size: 1em; transition: background-color 0.3s ease; }
        button:hover { background-color: grey; }
        .buttonsubmit { margin-top: 20px; justify-content: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Profile Login</h2>
        <form id="loginForm" action="login.php" method="POST">
            <div>
                <label for="rollNo">Roll Number:</label>
                <input type="text" id="rollNo" name="roll_no" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="buttonsubmit">
                <button type="submit">Login</button>
                <button type="button" onclick="location.href='signup.php'">Sign up</button>
            </div>
        </form>
    </div>
</body>
</html>

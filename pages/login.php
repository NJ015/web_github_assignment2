<html>
<head>
<link rel="stylesheet" href="../styling/login.css">
</head>

<body>
    <div id="container">
        <span>Login</span>
        <form method="POST" action="../BE/register.php">
            <label for="un">Username</label>
            <input type="text" name="un">
            <br>
            <label for="pass">Password</label>
            <input type="password" name="pass">
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
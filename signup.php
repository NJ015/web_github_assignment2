<html>
<head>

</head>

<body>
    <div id="container">
        <span>Sign Up</span>
        <form method="POST" action="BE/register.php">
            <label for="fn">First name</label>
            <input type="text" name="fn">
            <br>
            <label for="ln">Last name</label>
            <input type="text" name="ln">
            <br>
            <label for="un">Username</label>
            <input type="text" name="un">
            <br>
            <label for="pass">Password</label>
            <input type="password" name="pass">
            <br>
            <label for="sex">Sex</label>
            <input type="radio" name="sex" value="Female">
            <input type="radio" name="sex" value="Male">
            <br>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob">
            <br>
            <button type="submit">Sign up</button>
        </form>
    </div>
</body>
</html>
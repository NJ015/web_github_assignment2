<html>
<head>
    <link rel="stylesheet" href="../styling/signup.css">
</head>

<body>
    <div id="container">
        <span>SignUp</span>
        <form method="POST" action="../BE/register.php">
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
            <div id="sex">
                <div id="f">
                    <input type="radio" name="sex" value="Female">
                    <label for="sex">Female</label>
                </div>
                <div id="m">
                    <input type="radio" id="m" name="sex" value="Male">
                    <label for="sex">Male</label>
                </div>
            </div>
            <br>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob">
            <br>
            <button type="submit">Sign up</button>
            <div>Already have an account? 
                <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
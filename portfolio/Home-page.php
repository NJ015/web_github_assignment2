<?php
session_start();

if(isset($_SESSION["name"])){
    $Wmsg = "Welcome ". $_SESSION["name"] ."!";
}

?>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div class="row" id="header">
            <div id="menu">
                <span>Menu</span>
                <div class="menul">
                    <ul>
                        <a href="Home-page.php">
                            <li>
                                Home
                            </li>
                        </a>
                        <a href="CV page.php">
                            <li>
                                CV
                            </li>
                        </a>
                        <a href="Project Gallery page.php">
                            <li>
                                Projects
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div id="welcome-logout">
                <div id="welcome">
                <?php echo $Wmsg; ?>
                </div>
                <div id="logout">
                    <form action="../BE/logout.php" method="POST">
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="pic">
                <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
            </div>
            <div class="text">
                <div class="bio">
                    I am a junior Computer Science student who is deeply passionate about leveraging technology to solve complex problems and drive innovation. I am eager to contribute to projects that push the boundaries of what technology can achieve. I am inclined towards Web Development and Application Development, but I am also interested in expanding my knowledge beyond them. I am eager to apply my academic knowledge to real-world projects and contribute to innovative solutions in the field. My commitment to continuous learning and collaboration fuels my ambition to excel in the dynamic field of computer science.
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="ciddiv">
                <div class="cid">
                    Phone<br>+961 70 166 557
                </div>
                <div class="cid">
                    Email<br>nour.jalloul01@lau.edu
                </div>
                <div class="cid">
                    Linkedin<br><a href="https://www.linkedin.com/in/nour-jalloul/">Nour Jalloul</a>
                </div>
            </div>
        </div>
    </body>
</html>

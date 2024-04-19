<?php
session_start();

if(isset($_SESSION["name"])){
    $Wmsg = "Welcome ". $_SESSION["name"] ."!";
}

?>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="PG.css">
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
            <div class="profilepic">
                <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
            </div>
            <div class="projectpics">
                <div class="pic-textdiv">
                    <div class="picdiv">
                        <a href="Project Details page 1.php">
                            <img class="pics" src="images/download.png">
                        </a>
                    </div>
                    <div class="textdiv">
                        <a href="Project Details page 1.php">
                            OS
                        </a>
                    </div>
                </div>
                <div class="pic-textdiv">
                    <div class="picdiv">
                        <a href="Project Details pagge 2.php">
                            <img class="pics" src="images/download (1).png">
                        </a>
                    </div>
                    <div class="textdiv">
                        <a href="Project Details pagge 2.php">
                            CO
                        </a>
                    </div>
                </div>
                <div class="pic-textdiv">
                    <div class="picdiv">
                        <a href="Project Details page 3.php">
                            <img class="pics" src="images/DB1.jpg">
                        </a>
                    </div>
                    <div class="textdiv">
                        <a href="Project Details page 3.php">
                            DBMS
                        </a>
                    </div>
                </div>
                <div class="pic-textdiv">
                    <div class="picdiv">
                        <a href="Project Details page 4.php">
                            <img class="pics" src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
                        </a>
                    </div>
                    <div class="textdiv">
                        <a href="Project Details page 4.php">
                            Project Name
                        </a>
                    </div>
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

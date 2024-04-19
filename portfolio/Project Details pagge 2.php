<?php
session_start();

if(isset($_SESSION["name"])){
    $Wmsg = "Welcome ". $_SESSION["name"] ."!";
}

?>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="PD.css">
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
            <div class="all">
                <div class="row1">
                    <div class="main-pic">
                        <a href="Project Gallery page.php">
                            <img src="images/download (1).png">
                        </a>
                    </div>
                    <div class="des">
                        A description of database project. A description of database project. A description of database project. A description of database project. A description of database project. A description of database project. <br> Press and hold to view the expanded view of the pics below. 
                    </div>
                    <div class="other-pics">
                        <div class="pics">
                            <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
                        </div>
                        <div class="pics">
                            <img src="images/download (1).png">
                        </div>
                        <div class="pics">
                            <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
                        </div>
                        <div class="pics">
                            <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
                        </div>
                        <div class="pics">
                            <img src="images/download (1).png">
                        </div>
                        <div class="pics">
                            <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
                        </div>
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

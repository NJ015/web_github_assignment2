<?php
session_start();

if(isset($_SESSION["name"])){
    $Wmsg = "Welcome ". $_SESSION["name"] ."!";
}

?>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="CV.css">
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
            <div id="big-container">

                <div id="left">
                    <div class="image-container">
                        <img src="images/04612b7487da45cc8a1a4adfb0f35afb.jpeg">
                    </div>
                    <div id="name">
                        Nour Jalloul
                    </div>
    
                    <div class="lt">
                        Personal Info
                    </div>
        
                    <div>
                        <dl class="boldedtitles">
                            <dt>Phone Number</dt>
                            <dd>+961 70 166 557</dd>
                            <dt>Email</dt>
                            <dd>nour.jalloul01@lau.edu</dd>
                            <dt>LinkedIn</dt>
                            <dd>linkedin.com/in/nour-jalloul</dd>
                            <dt>Address</dt>
                            <dd>Beirut, Lebanon</dd>
                        </dl>
                    </div>
        
                    <div class="lt">
                        Languages
                    </div>
                    <div>
                        English - Arabic
                    </div>
        
                    <div class="lt">
                        Education
                    </div>
                    <div>
                        <div class="subTitle">Lebanese American University, Beirut, Lebanon</div>
                        <ul>
                            <li style="font-style: italic;">Expected Graduation May 2025</li>
                            <li>BS in Computer Science</li>
                            <li>CGPA: 3.54/4.0</li>
                        </ul>
                        
                    </div>
                </div>
        
                <div id="right">
                    <div class="rt">
                        About Me
                    </div>
                    <div>
                        I am a junior Computer Science student who is deeply passionate about leveraging technology to solve complex problems and drive innovation. I am eager to contribute to projects that push the boundaries of what technology can achieve. I am inclined towards Web Development and Application Development, but I am also interested in expanding my knowledge beyond them. I am eager to apply my academic knowledge to real-world projects and contribute to innovative solutions in the field. My commitment to continuous learning and collaboration fuels my ambition to excel in the dynamic field of computer science.
                    </div>
    
                    <div class="rt">
                        Relevant Coursework
                    </div>
                    <div>
                        <ul>
                            <li>Introduction to Object Oriented Programming</li>
                            <li>Objects & Data Abstractions</li>
                            <li>Algorithms & Data Structures</li>
                            <li>Operating Systems</li>
                            <li>Database Management Systems</li>
                        </ul>
                    </div>
    
                    <div class="rt">
                        Projects
                    </div>
                    <div>
                        <div class="subTitle">Database Project for a Sports Academy<div class="date">Fall 2023</div></div>
                        <ul>
                            <li>Designed an Entity-Relation Diagram for a Sports Academy Database.</li>
                            <li>Translated the ER schema to tables.</li>
                            <li>Implemented the database using SQL on the Oracle Server.</li>
                            <li>Normalized the tables according to BCNF.</li>
                            <li>Utilized draw.io, Oracle SQL Server, SQL.</li>
                        </ul>
                    </div>
    
                    <div class="rt">
                        Extracurricular Activities
                    </div>
                    <div>
                        <ul>
                            <li>
                                <dl>
                                    <dt>Meds for Lebanon, Beirut, Lebanon<div class="date">November 2021-2022</div></dt>
                                    <dd>Coordinated the distribution of medication in Lebanon to people in need.</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>All Girls Code, Beirut, Lebanon<div class="date">2018-2021</div></dt>
                                    <dd>Learned HTML, Python, and Java</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
    
                    <div class="rt">
                        Technical Skills
                    </div>
                    <div>
                        <ul>
                            <li>Programming skills: Python, Java, C, SQL, HTML, CSS, and JavaScript.</li>
                            <li>Computer skills: Microsoft Office (Word, Excel, PowerPoint).</li>
                        </ul>
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

<?php
session_start();

if(isset($_SESSION["name"])){
    $Wmsg = "Welcome ". $_SESSION["name"] ."!";
}

?>

<html>
    <head>
        
    </head>
    <body>
        <?php echo $Wmsg ?>
        <form action="../BE/logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </body>
</html>
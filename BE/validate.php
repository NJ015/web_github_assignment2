<?php

session_start();

function validate_user($u, $p) {
    $csvFile = fopen('users.csv', 'r');
    while (($row = fgetcsv($csvFile)) !== false) {
        if ($row[0] === $u && $row[1] === $p) {
            fclose($csvFile);
            $_SESSION["name"] = $row[2]." ".$row[3];
            return true;
        }
    }
    fclose($csvFile);
    return false;
}

$un = $_POST["un"];
$pass = $_POST["pass"];

if (empty($un) || empty($pass)) {
    header("location:../pages/login.php?error=empty_fields");
    exit;
}

if (validate_user($un, $pass)) {
    header("location:../pages/gallery.php");
    exit;
}
else {
    header("location:../pages/login.php?error=invalid_credentials");
    exit;
}

?>

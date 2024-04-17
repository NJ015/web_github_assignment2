<?php

session_start();

function add_new_user($user_info) {
    $csvFile = fopen('users.csv', 'a');
    fputcsv($csvFile, $user_info);
    fclose($csvFile);
}

function is_duplicate_username($username) {
    $csvFile = fopen('users.csv', 'r');
    while (($row = fgetcsv($csvFile)) !== false) {
        if ($row[0] === $username) {
            fclose($csvFile);
            return true;
        }
    }
    fclose($csvFile);
    return false;
}

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$un = $_POST["un"];
$pass = $_POST["pass"];
$sex = $_POST["sex"];
$dob = $_POST["dob"];

if (empty($fn) || empty($ln) || empty($un) || empty($pass) || empty($sex) || empty($dob)) {
    echo "Please fill all the fields";
    header("location:../pages/signup.php?error=empty_fields");
    exit;
}
elseif (is_duplicate_username($un)) {
    header("location:../pages/signup.php?error=un_already_exists");
    exit;
}

$user_info = array($un, $pass, $fn, $ln, $sex, $dob);
add_new_user($user_info);

$_SESSION["name"] = $fn." ".$ln;

header("location:../pages/gallery.php");
exit;


?>
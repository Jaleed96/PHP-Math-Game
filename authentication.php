<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}
$_SESSION['error'];
$validate = 0;
$cred = file_get_contents("credentials.config");
$user = explode("\n", $cred);
$id = array();
$pw = array();
for ($i = 0; $i < count($user); $i++) {
    $data = explode(', ', $user[$i]);
    array_push($id, trim($data[0]));
    array_push($pw, trim($data[1]));
}
for ($i = 0; ($i < count($user) && $validate != 1); $i++) {
    if (($id[$i] == $_POST["email"]) && ($pw[$i] == $_POST["password"])) {
        $validate = 1;
    }  
}
if ($validate == 0) {
    $_SESSION['error'] = "Invalid login credentials.";
    header("Location: login.php");
    die();
} else {
    $_SESSION['id'] = $_POST["email"];
    header("Location: index.php");
    die();
}
?>
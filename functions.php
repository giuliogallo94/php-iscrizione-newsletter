<?php 

$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
session_start();




if (isset($_GET["email"])) {
    $email = $_GET["email"];
    if (!preg_match($pattern, $email)) {
        $validMail = false;
        $_SESSION['email'] = $email;
    } else {
        $validMail = true;
        $_SESSION['email'] = $email;
        header('Location: ./thankyou.php');

        die;
}

$email = $_GET["email"];

 if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
     header('Location: ./thankyou.php');
     die;
 }

var_dump($_SESSION);
}
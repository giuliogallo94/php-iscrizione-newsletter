<?php 

$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
session_start();




if (isset($_GET["email"])) {
    $email = $_GET["email"];
    if (!preg_match($pattern, $email)) {
        $validMail = false;
        unset($_SESSION['validEmail']);
        $_SESSION['errorEmail'] = $email;
        header('Location: ./index.php');
        die;
    } else {
        $validMail = true;
        $_SESSION['validEmail'] = $email;
        unset($_SESSION['errorEmail']);
        header('Location: ./thankyou.php');
        die;
}



var_dump($_SESSION);
}
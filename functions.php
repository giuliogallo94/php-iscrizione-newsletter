<?php 

$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
// $email = $_GET["email"];

if (isset($_GET["email"])) {
    $email = $_GET["email"];
    if (!preg_match($pattern, $email)) {
        echo "Mail non valida";
    } else {
    echo $email;
}
}
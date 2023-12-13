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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main>
        <section class="text-center p-5">
            <form action="index.php" method="GET">
                <label for="email"><h3>Inserisci la tua mail:</h3></label>
                <input type="text" name="email" class="form-control w-50 mx-auto my-4">
                <button class="btn btn-primary" type="submit">Invia</button>
            </form>
        </section>
    </main>
</body>
</html>
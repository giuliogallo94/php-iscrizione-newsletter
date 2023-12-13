<?php
require_once __DIR__ . "/functions.php";
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
                <input type="text" name="email" class="form-control w-50 mx-auto my-4" placeholder="<?php if(isset($_SESSION["errorEmail"])) echo $_SESSION["errorEmail"]?>">
                <button class="btn btn-primary" type="submit">Invia</button>
                <?php if(isset($_SESSION['errorEmail'])) { ?>
                <div class="alert alert-danger mt-5" role="alert">
            <h2>La mail "<?php echo $_SESSION["errorEmail"]; ?>" non è valida!</h2>
        </div> <?php } ?>
            </form>
        </section>
    </main>
</body>
</html>
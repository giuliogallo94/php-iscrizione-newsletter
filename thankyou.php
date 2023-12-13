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
    <div class="div text-center">



        <div class="alert alert-success mt-5" role="alert">
            <h2>La mail "<?php echo $_SESSION["validEmail"]; ?>" è stata registrata correttamente!</h2>
        </div> 
        <button class="btn btn-primary" type="submit"><a href="./newmail.php" class="text-decoration-none" style="color:white;">Inserisci nuova mail</a></button>
        
    </div>
</body>
</html>
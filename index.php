<?php
// richiamo la funzione per generare le password presente nel file functions.php:
require_once './functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Collego bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Collego il file css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Password Generator</title>
</head>

<body>

    <div class="container p-3">


        <h1 class="h1-index">Strong Password Generator</h1>
        <h2 class="h2-index">Genera una password sicura</h2>

        <form action="./result.php" method="GET" class="class-form d-flex">
            <div class="row col-12">
                <label for="length_pwd" class="col-6">Lunghezza password:</label>
                <input type="number" min=1 name="pwd_length" id="length_pwd" class="col-6">
                <button type="submit" class="btn btn-primary my-3">Invia</button>
            </div>
        </form>

    </div>

</body>

</html>
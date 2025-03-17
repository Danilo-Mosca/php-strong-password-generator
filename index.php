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

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>


    <form action="./result.php" method="GET" class="class-form">
        <label for="length_pwd">Lunghezza password:</label>
        <input type="number" min=1 name="pwd_length" id="length_pwd">
        <button type="submit">Invia</button>
    </form>

</body>

</html>